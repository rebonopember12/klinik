<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Tindakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaTindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JenisTindakan')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'Tanggal')->textInput()->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd'
        ]
    ]);?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
