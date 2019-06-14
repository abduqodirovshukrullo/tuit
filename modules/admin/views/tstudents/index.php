<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Students');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'image',
            'name',
//            'name_ru',
            'surname',
            //'surname_ru',
            'group',
            'subject',
            'phone',
            //'email:email',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
//                    'view' => function($url, $model) {
//                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-eye']) . ' View', $url, ['class' => 'btn btn-success']);
//                    },
                    'update' => function($url, $model) {
//                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-pencil']) . ' Update', $url, ['class' => 'btn btn-primary']);
                    },
//                    'delete' => function($url, $model) {
//                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-delete']) . 'Delete', $url, [
//                            'class' => 'btn btn-danger',
//                            'data' => [
//                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
//                                'method' => 'post',
//                            ]
//                        ]);
//                    }
                ]
            ],




        ],
    ]); ?>


</div>
