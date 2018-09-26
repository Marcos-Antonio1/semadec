<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property int $idGrupo
 * @property string $Nome
 *
 * @property Time[] $times
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['Nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idGrupo' => Yii::t('app', 'Id Grupo'),
            'Nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimes()
    {
        return $this->hasMany(Time::className(), ['grupo_idGrupo' => 'idGrupo']);
    }
}
