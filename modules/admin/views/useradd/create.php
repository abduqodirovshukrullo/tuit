<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Useradd */

$this->title = Yii::t('app', 'Create Useradd');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Useradds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useradd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
