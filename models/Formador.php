<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formador".
 *
 * @property string $idFormador
 * @property string $nome
 * @property string $apresentacao
 * @property string $formacao
 *
 * @property EventoHasFormador[] $eventoHasFormadors
 * @property Evento[] $eventoIdpalestras
 */
class Formador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'formador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'formacao'], 'required'],
            [['nome'], 'string', 'max' => 100],
            [['apresentacao', 'formacao'], 'string', 'max' => 240],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idFormador' => Yii::t('app', 'Id Formador'),
            'nome' => Yii::t('app', 'Nome'),
            'apresentacao' => Yii::t('app', 'Apresentacao'),
            'formacao' => Yii::t('app', 'Formacao'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoHasFormadors()
    {
        return $this->hasMany(EventoHasFormador::className(), ['Formador_idFormador' => 'idFormador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoIdpalestras()
    {
        return $this->hasMany(Evento::className(), ['idpalestra' => 'evento_idpalestra'])->viaTable('evento_has_formador', ['Formador_idFormador' => 'idFormador']);
    }
}
