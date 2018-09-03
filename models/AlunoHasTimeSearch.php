<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AlunoHasTime;

/**
 * AlunoHasTimeSearch represents the model behind the search form of `app\models\AlunoHasTime`.
 */
class AlunoHasTimeSearch extends AlunoHasTime
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Aluno_Matricula', 'Time_idTime'], 'integer'],
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
        $query = AlunoHasTime::find();

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
            'Aluno_Matricula' => $this->Aluno_Matricula,
            'Time_idTime' => $this->Time_idTime,
        ]);

        return $dataProvider;
    }
}
