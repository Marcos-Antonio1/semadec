<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Grupo;

/**
 * GrupoSearch represents the model behind the search form of `app\models\Grupo`.
 */
class GrupoSearch extends Grupo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idGrupo'], 'integer'],
            [['Nome'], 'safe'],
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
        $query = Grupo::find();

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
            'idGrupo' => $this->idGrupo,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome]);

        return $dataProvider;
    }
}
