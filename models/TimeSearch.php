<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Time;

/**
 * TimeSearch represents the model behind the search form of `app\models\Time`.
 */
class TimeSearch extends Time
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTime', 'idTurma', 'pontuacao', 'grupo_idGrupo'], 'integer'],
            [['tipo', 'Nome'], 'safe'],
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

    public function listByGroup($id) {
        $consulta = self::find()
        ->where(['grupo_idGrupo'=>$id])->orderBy('pontuacao asc');

        $dataProvider = new ActiveDataProvider([
            'query' => $consulta,
        ]);

        return $dataProvider;
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
        $query = Time::find();

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
            'idTime' => $this->idTime,
            'idTurma' => $this->idTurma,
            'pontuacao' => $this->pontuacao,
            'grupo_idGrupo' => $this->grupo_idGrupo,
        ]);

        $query->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'Nome', $this->Nome]);

        return $dataProvider;
    }
}
