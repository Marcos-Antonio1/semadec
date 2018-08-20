<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jogos_has_arbitro".
 *
 * @property int $Jogos_idJogos
 * @property int $Arbitro_idArbitro
 *
 * @property Arbitro $arbitroIdArbitro
 * @property Jogos $jogosIdJogos
 */
class JogosHasArbitro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogos_has_arbitro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Jogos_idJogos', 'Arbitro_idArbitro'], 'required'],
            [['Jogos_idJogos', 'Arbitro_idArbitro'], 'integer'],
            [['Jogos_idJogos', 'Arbitro_idArbitro'], 'unique', 'targetAttribute' => ['Jogos_idJogos', 'Arbitro_idArbitro']],
            [['Arbitro_idArbitro'], 'exist', 'skipOnError' => true, 'targetClass' => Arbitro::className(), 'targetAttribute' => ['Arbitro_idArbitro' => 'idArbitro']],
            [['Jogos_idJogos'], 'exist', 'skipOnError' => true, 'targetClass' => Jogos::className(), 'targetAttribute' => ['Jogos_idJogos' => 'idJogos']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Jogos_idJogos' => Yii::t('app', 'Jogos Id Jogos'),
            'Arbitro_idArbitro' => Yii::t('app', 'Arbitro Id Arbitro'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArbitroIdArbitro()
    {
        return $this->hasOne(Arbitro::className(), ['idArbitro' => 'Arbitro_idArbitro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogosIdJogos()
    {
        return $this->hasOne(Jogos::className(), ['idJogos' => 'Jogos_idJogos']);
    }
}
