<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Formador;

/**
 * FormadorSearch represents the model behind the search form of `app\models\Formador`.
 */
class FormadorSearch extends Formador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idFormador'], 'integer'],
            [['nome', 'apresentacao', 'formacao'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Formador::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idFormador' => $this->idFormador,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'apresentacao', $this->apresentacao])
            ->andFilterWhere(['like', 'formacao', $this->formacao]);

        return $dataProvider;
    }
}
