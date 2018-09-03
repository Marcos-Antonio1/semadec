<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evento".
 *
 * @property string $idpalestra
 * @property string $Tema
 * @property string $descricao
 * @property string $horario
 * @property int $horascurriculares
 * @property string $tipo
 *
 * @property Escrincoes[] $escrincoes
 * @property Aluno[] $alunoMatriculas
 * @property EventoHasFormador[] $eventoHasFormadors
 * @property Formador[] $formadorIdFormadors
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tema', 'descricao'], 'required'],
            [['horario'], 'safe'],
            [['horascurriculares'], 'integer'],
            [['Tema'], 'string', 'max' => 100],
            [['descricao'], 'string', 'max' => 240],
            [['tipo'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idpalestra' => Yii::t('app', 'Idpalestra'),
            'Tema' => Yii::t('app', 'Tema'),
            'descricao' => Yii::t('app', 'Descricao'),
            'horario' => Yii::t('app', 'Horario'),
            'horascurriculares' => Yii::t('app', 'Horascurriculares'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscrincoes()
    {
        return $this->hasMany(Escrincoes::className(), ['evento_idpalestra' => 'idpalestra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunoMatriculas()
    {
        return $this->hasMany(Aluno::className(), ['Matricula' => 'Aluno_Matricula'])->viaTable('escrincoes', ['evento_idpalestra' => 'idpalestra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoHasFormadors()
    {
        return $this->hasMany(EventoHasFormador::className(), ['evento_idpalestra' => 'idpalestra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormadorIdFormadors()
    {
        return $this->hasMany(Formador::className(), ['idFormador' => 'Formador_idFormador'])->viaTable('evento_has_formador', ['evento_idpalestra' => 'idpalestra']);
    }
}
