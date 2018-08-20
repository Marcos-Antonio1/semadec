<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property int $Matricula
 * @property string $nome
 * @property string $email
 * @property int $numero
 * @property int $idPenalidade
 *
 * @property AlunoHasTime[] $alunoHasTimes
 * @property Time[] $timeIdTimes
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Matricula', 'nome'], 'required'],
            [['Matricula', 'numero', 'idPenalidade'], 'integer'],
            [['nome', 'email'], 'string', 'max' => 45],
            [['Matricula'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Matricula' => Yii::t('app', 'Matricula'),
            'nome' => Yii::t('app', 'Nome'),
            'email' => Yii::t('app', 'Email'),
            'numero' => Yii::t('app', 'Numero'),
            'idPenalidade' => Yii::t('app', 'Id Penalidade'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunoHasTimes()
    {
        return $this->hasMany(AlunoHasTime::className(), ['Aluno_Matricula' => 'Matricula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeIdTimes()
    {
        return $this->hasMany(Time::className(), ['idTime' => 'Time_idTime'])->viaTable('aluno_has_time', ['Aluno_Matricula' => 'Matricula']);
    }
}
