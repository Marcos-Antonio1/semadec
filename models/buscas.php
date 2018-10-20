<?php

namespace app\models;

use Yii;


class Time extends \yii\db\ActiveRecord
{

     public function buscarTimes(){
        return $query=(new\yii\db\Query())
        ->select(['*'])
        ->from ('grupos')
        ->where('grupo_idGrupo= 1')
        ->orderBy('pontuacao DESC')
        ->all();
     }
}
