<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Мой калькулятор';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
//$value_1 = $model->$value_1;
//$value_2 = $model->$value_2;
?>
    <ul>
        <li><label>Число 1</label>: <?= Html::encode($model->value_1) ?></li>
        <li><label>Число 2</label>: <?= Html::encode($model->value_2) ?></li>
        <li><label>Плюсуем</label>: <?= Plus($model->value_1, $model->value_2 )?></li>
        <li><label>Минусуем</label>: <?= Minus($model->value_1, $model->value_2 )?></li>
        <li><label>Множим</label>: <?= Mnozh($model->value_1, $model->value_2 )?></li>
        <li><label>Делим</label>: <?= Delenie($model->value_1, $model->value_2 )?></li>
    </ul>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'value_1')->label('Число 1') ?>

<?= $form->field($model, 'value_2')->label('Число 2')  ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>


<?php ActiveForm::end(); ?>

<?php
echo '<hr>';
//MyPrint($model);


