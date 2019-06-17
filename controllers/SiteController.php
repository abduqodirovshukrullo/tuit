<?php

namespace app\controllers;

use app\models\Carousel;
use app\models\Courses;
use app\models\News;
use app\models\Signup as SignupModel;
use app\models\Students;
use app\models\Teachers;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm as Login;
use app\models\ContactForm;
use yii\web\View;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
//                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'oldmain';
        $carousels = Carousel::find()->all();
        $courses  = Courses::find()->orderBy(['order'=>SORT_DESC])->limit(3)->all();
        $tutors = Teachers::find()->limit(4)->all();
        $actives = News::find()->where(['status'=>1])->one();
        $mains = News::find()->where(['status'=>2])->limit(4)->all();
//        $student = new Students();
        $model = new Students();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

                return $this->refresh();
        }
        else
        {
            yii::$app->session->setFlash('error','error');
//                return $this->refresh();
            return $this->render('index',
                [
                    'carousels'=>$carousels,
                    'courses'=>$courses,
                    'tutors'=>$tutors,
                    'actives'=> $actives,
                    'mains'=>$mains,
                    'model'=>$model,
                ]);

        }



    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = '@app/modules/admin/views/layouts/login';
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new Login();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    public function actionSignup()
    {
       $student = new Students();
        if($student->load(Yii::$app->getRequest()->post())&& $student->save())
        {
            $student->name = $_POST['name'];
            $student->phone = $_POST['phone'];
            $student->group = $_POST['group'];
            $student->email = $_POST['email'];
            $student->subject = $_POST['subject'];
            print_r($student);
            exit();
            $student->save();
            return $this->redirect('site/index');



        }
    }



    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
//        $this->layout = 'about';
//        $this->registerCssFile("@web/styles/about");
        return $this->render('about');
    }
    public function actionCourses()
    {
//        $this->layout = 'about';
//        $this->registerCssFile("@web/styles/about");
        return $this->render('courses');
    }
    public function actionCourse()
    {
//        $this->layout = 'about';
//        $this->registerCssFile("@web/styles/about");
        return $this->render('course');
    }
    public function actionNews()
    {
//        $this->layout = 'about';
//        $this->registerCssFile("@web/styles/about");
        return $this->render('news');
    }
    public function actionNewssingle()
    {
//        $this->layout = 'about';
//        $this->registerCssFile("@web/styles/about");
        return $this->render('newssingle');
    }

}
