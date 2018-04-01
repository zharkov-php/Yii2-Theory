<?php

namespace frontend\controllers;

use frontend\models\CalculatorForm;
use Yii;

class CalculatorController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new CalculatorForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            // делаем что-то полезное с $model ...

            return $this->render('index', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('index', ['model' => $model]);
        }
    }

}
