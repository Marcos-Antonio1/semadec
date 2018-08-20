<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adm".
 *
 * @property int $idADM
 * @property string $Username
 * @property string $Password
 * @property string $auth_key
 * @property string $access_token
 */
class Adm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Username', 'Password', 'auth_key', 'access_token'], 'required'],
            [['Username'], 'string', 'max' => 45],
            [['Password', 'auth_key', 'access_token'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idADM' => Yii::t('app', 'Id Adm'),
            'Username' => Yii::t('app', 'Username'),
            'Password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'access_token' => Yii::t('app', 'Access Token'),
        ];
    }
}
