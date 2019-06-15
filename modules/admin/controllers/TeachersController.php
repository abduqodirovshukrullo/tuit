<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Teachers;
use app\models\TeachersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TeachersController implements the CRUD actions for Teachers model.
 */
class TeachersController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Teachers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeachersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Teachers model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Teachers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Teachers();

        if ($model->load(Yii::$app->request->post()) && $model->save() ) {

            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->image = $model->id. '.' .$model->imageFile->baseName. '.' . $model->imageFile->extension;
            $model->save();
            if ($model->upload()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }
        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Teachers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $mod = $model->image;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if($model->imageFile = UploadedFile::getInstance($model, 'imageFile'))
            {
                $model->image = $model->id. '.' .$model->imageFile->baseName. '.' . $model->imageFile->extension;
                $model->save();

                if ($model->upload()) {
                    unlink($_SERVER["DOCUMENT_ROOT"]."/web/uploads/".$mod);
//                        return $this->redirect(['view', 'id' => $model->id]);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }

            else{
                $model->image = $mod;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Teachers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if(isset($model->image)){
            unlink($_SERVER["DOCUMENT_ROOT"]."/web/uploads/".$model->image);
            $model->delete();
        }
        else{
            $model->delete();
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Teachers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Teachers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Teachers::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
