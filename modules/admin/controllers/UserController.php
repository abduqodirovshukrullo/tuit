<?php

namespace app\modules\admin\controllers;

use mdm\admin\models\form\Signup;
use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mdm\admin\controllers\UserController as Usermdm;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Usermdm
{
    public function actionAdd()
    {
        $model = new Signup();
        if ($model->load(Yii::$app->getRequest()->post())) {
            if ($user = $model->signup()) {
                return  $this->redirect('index');
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}
