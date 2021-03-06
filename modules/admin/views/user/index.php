<?php

use mdm\admin\models\searchs\User;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\grid\GridView;
use mdm\admin\components\Helper;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
            'role',
//            [
//                'attribute' => 'status',
//                'value' => function($model) {
//                    return $model->status == 0 ? 'Inactive' : 'Active';
//                },
//                'filter' => [
//                    0 => 'Inactive',
//                    10 => 'Active'
//                ]
//            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => Helper::filterActionColumn(['view', 'activate', 'delete']),
                'buttons' => [
                    'activate' => function($url, $model) {
                        if ($model->status == 10) {
                            return '';
                        }
                        $options = [
                            'title' => Yii::t('app', 'Activate'),
                            'aria-label' => Yii::t('app', 'Activate'),
                            'data-confirm' => Yii::t('app', 'Are you sure you want to activate this user?'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
                    }
                ]
            ],
        ],
    ]);
    ?>
</div>
