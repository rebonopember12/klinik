<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tindakan */

$this->title = 'Update Tindakan: ' . $model->id_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Data Tindakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tindakan, 'url' => ['view', 'id_tindakan' => $model->id_tindakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
