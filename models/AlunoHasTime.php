<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno_has_time".
 *
 * @property int $Aluno_Matricula
 * @property int $Time_idTime
 *
 * @property Aluno $alunoMatricula
 * @property Time $timeIdTime
 */
class AlunoHasTime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluno_has_time';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Aluno_Matricula', 'Time_idTime'], 'required'],
            [['Aluno_Matricula', 'Time_idTime'], 'integer'],
            [['Aluno_Matricula', 'Time_idTime'], 'unique', 'targetAttribute' => ['Aluno_Matricula', 'Time_idTime']],
            [['Aluno_Matricula'], 'exist', 'skipOnError' => true, 'targetClass' => Aluno::className(), 'targetAttribute' => ['Aluno_Matricula' => 'Matricula']],
            [['Time_idTime'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['Time_idTime' => 'idTime']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Aluno_Matricula' => Yii::t('app', 'Aluno  Matricula'),
            'Time_idTime' => Yii::t('app', 'Time Id Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunoMatricula()
    {
        return $this->hasOne(Aluno::className(), ['Matricula' => 'Aluno_Matricula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeIdTime()
    {
        return $this->hasOne(Time::className(), ['idTime' => 'Time_idTime']);
    }
}
