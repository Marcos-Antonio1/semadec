<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arbitro".
 *
 * @property int $idArbitro
 * @property string $nome
 * @property string $email
 *
 * @property JogosHasArbitro[] $jogosHasArbitros
 * @property Jogos[] $jogosIdJogos
 */
class Arbitro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arbitro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idArbitro' => Yii::t('app', 'Id Arbitro'),
            'nome' => Yii::t('app', 'Nome'),
            'email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogosHasArbitros()
    {
        return $this->hasMany(JogosHasArbitro::className(), ['Arbitro_idArbitro' => 'idArbitro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogosIdJogos()
    {
        return $this->hasMany(Jogos::className(), ['idJogos' => 'Jogos_idJogos'])->viaTable('jogos_has_arbitro', ['Arbitro_idArbitro' => 'idArbitro']);
    }
}
