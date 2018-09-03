<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escrincoes".
 *
 * @property string $evento_idpalestra
 * @property int $Aluno_Matricula
 *
 * @property Aluno $alunoMatricula
 * @property Evento $eventoIdpalestra
 */
class Escrincoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'escrincoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['evento_idpalestra', 'Aluno_Matricula'], 'required'],
            [['evento_idpalestra', 'Aluno_Matricula'], 'integer'],
            [['evento_idpalestra', 'Aluno_Matricula'], 'unique', 'targetAttribute' => ['evento_idpalestra', 'Aluno_Matricula']],
            [['Aluno_Matricula'], 'exist', 'skipOnError' => true, 'targetClass' => Aluno::className(), 'targetAttribute' => ['Aluno_Matricula' => 'Matricula']],
            [['evento_idpalestra'], 'exist', 'skipOnError' => true, 'targetClass' => Evento::className(), 'targetAttribute' => ['evento_idpalestra' => 'idpalestra']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'evento_idpalestra' => Yii::t('app', 'Evento Idpalestra'),
            'Aluno_Matricula' => Yii::t('app', 'Aluno  Matricula'),
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
    public function getEventoIdpalestra()
    {
        return $this->hasOne(Evento::className(), ['idpalestra' => 'evento_idpalestra']);
    }
}
