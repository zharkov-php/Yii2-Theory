<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 01.04.2018
 * Time: 9:20
 */

namespace frontend\models;


use yii\base\Model;

class CalculatorForm extends Model
{

    public  $value_1;
    public  $value_2;



    public function rules()
    {
        return [
            [['value_1', 'value_2'], 'required'],
        ];
    }
}