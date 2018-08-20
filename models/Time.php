<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "time".
 *
 * @property int $idTime
 * @property string $tipo
 * @property int $idTurma
 *
 * @property AlunoHasTime[] $alunoHasTimes
 * @property Aluno[] $alunoMatriculas
 * @property Jogos[] $jogos
 * @property Jogos[] $jogos0
 * @property Turma $turma
 * @property TimeCampeonato[] $timeCampeonatos
 * @property Campeonato[] $campeonatos
 */
class Time extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'time';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo'], 'required'],
            [['idTurma'], 'integer'],
            [['tipo'], 'string', 'max' => 45],
            [['idTurma'], 'exist', 'skipOnError' => true, 'targetClass' => Turma::className(), 'targetAttribute' => ['idTurma' => 'idTurma']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTime' => Yii::t('app', 'Id Time'),
            'tipo' => Yii::t('app', 'Tipo'),
            'idTurma' => Yii::t('app', 'Id Turma'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunoHasTimes()
    {
        return $this->hasMany(AlunoHasTime::className(), ['Time_idTime' => 'idTime']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunoMatriculas()
    {
        return $this->hasMany(Aluno::className(), ['Matricula' => 'Aluno_Matricula'])->viaTable('aluno_has_time', ['Time_idTime' => 'idTime']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogos()
    {
        return $this->hasMany(Jogos::className(), ['idTime1' => 'idTime']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogos0()
    {
        return $this->hasMany(Jogos::className(), ['idTime2' => 'idTime']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTurma()
    {
        return $this->hasOne(Turma::className(), ['idTurma' => 'idTurma']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeCampeonatos()
    {
        return $this->hasMany(TimeCampeonato::className(), ['idTime' => 'idTime']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampeonatos()
    {
        return $this->hasMany(Campeonato::className(), ['idCampeonato' => 'idCampeonato'])->viaTable('time_campeonato', ['idTime' => 'idTime']);
    }
}
