<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evento_has_formador".
 *
 * @property string $evento_idpalestra
 * @property string $Formador_idFormador
 *
 * @property Formador $formadorIdFormador
 * @property Evento $eventoIdpalestra
 */
class EventoHasFormador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evento_has_formador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['evento_idpalestra', 'Formador_idFormador'], 'required'],
            [['evento_idpalestra', 'Formador_idFormador'], 'integer'],
            [['evento_idpalestra', 'Formador_idFormador'], 'unique', 'targetAttribute' => ['evento_idpalestra', 'Formador_idFormador']],
            [['Formador_idFormador'], 'exist', 'skipOnError' => true, 'targetClass' => Formador::className(), 'targetAttribute' => ['Formador_idFormador' => 'idFormador']],
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
            'Formador_idFormador' => Yii::t('app', 'Formador Id Formador'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormadorIdFormador()
    {
        return $this->hasOne(Formador::className(), ['idFormador' => 'Formador_idFormador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoIdpalestra()
    {
        return $this->hasOne(Evento::className(), ['idpalestra' => 'evento_idpalestra']);
    }
}
