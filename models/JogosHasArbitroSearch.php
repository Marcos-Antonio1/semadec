<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JogosHasArbitro;

/**
 * JogosHasArbitroSearch represents the model behind the search form of `app\models\JogosHasArbitro`.
 */
class JogosHasArbitroSearch extends JogosHasArbitro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Jogos_idJogos', 'Arbitro_idArbitro'], 'integer'],
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
        $query = JogosHasArbitro::find();

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
            'Jogos_idJogos' => $this->Jogos_idJogos,
            'Arbitro_idArbitro' => $this->Arbitro_idArbitro,
        ]);

        return $dataProvider;
    }
}
