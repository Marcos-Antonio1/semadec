<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penalidadade".
 *
 * @property int $idPenalidadade
 * @property string $nome
 *
 * @property Aluno[] $alunos
 */
class Penalidadade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penalidadade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPenalidadade' => Yii::t('app', 'Id Penalidadade'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Aluno::className(), ['idPenalidade' => 'idPenalidadade']);
    }
}
