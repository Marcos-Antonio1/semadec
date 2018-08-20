<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jogos".
 *
 * @property int $idJogos
 * @property int $pontos_time_a
 * @property int $pontos_time_b
 * @property int $colocacao
 * @property int $idTime1
 * @property int $idTime2
 *
 * @property Time $time1
 * @property Time $time2
 * @property JogosHasArbitro[] $jogosHasArbitros
 * @property Arbitro[] $arbitroIdArbitros
 */
class Jogos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pontos_time_a', 'pontos_time_b', 'colocacao', 'idTime1', 'idTime2'], 'integer'],
            [['idTime1', 'idTime2'], 'required'],
            [['idTime1'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['idTime1' => 'idTime']],
            [['idTime2'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['idTime2' => 'idTime']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idJogos' => Yii::t('app', 'Id Jogos'),
            'pontos_time_a' => Yii::t('app', 'Pontos Time A'),
            'pontos_time_b' => Yii::t('app', 'Pontos Time B'),
            'colocacao' => Yii::t('app', 'Colocacao'),
            'idTime1' => Yii::t('app', 'Id Time1'),
            'idTime2' => Yii::t('app', 'Id Time2'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTime1()
    {
        return $this->hasOne(Time::className(), ['idTime' => 'idTime1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTime2()
    {
        return $this->hasOne(Time::className(), ['idTime' => 'idTime2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogosHasArbitros()
    {
        return $this->hasMany(JogosHasArbitro::className(), ['Jogos_idJogos' => 'idJogos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArbitroIdArbitros()
    {
        return $this->hasMany(Arbitro::className(), ['idArbitro' => 'Arbitro_idArbitro'])->viaTable('jogos_has_arbitro', ['Jogos_idJogos' => 'idJogos']);
    }
}
