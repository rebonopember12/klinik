<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaObat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JenisObat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Stock')->textInput() ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
