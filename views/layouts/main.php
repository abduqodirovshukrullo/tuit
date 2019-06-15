<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AboutAppAsset;

AboutAppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Unicat project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->head() ?>

        <style>
            .breadcrumbs_container ul {
                margin-bottom: 0;
            }
        </style>

    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="super_container">

        <header class="header">


            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">IA<span>C</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="#">Bosh sahifa</a></li>
                                        <li><a href="<?= \yii\helpers\Url::to(['../site/about']) ?>">Biz haqimizda</a>
                                        </li>
                                        <li class="activee"><a class="hoverr" href="<?= \yii\helpers\Url::to(['../site/courses']) ?>">Kurslar</a></li>
                                        <!-- <li><a href="blog.html">Blog</a></li> -->
                                        <li><a href="<?= \yii\helpers\Url::to(['../site/news']) ?>">Yangiliklar</a></li>
<!--                                        <li><a href="contact.html">Aloqa</a></li>-->
                                        <?php if (Yii::$app->user->isGuest): ?>
<!--                                            <li><a href="--><?//= \yii\helpers\Url::to(['site/login']); ?><!--">Admin</a></li>-->

                                        <?php endif; ?>
                                        <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role == 1): ?>
                                            <li><a href="<?= \yii\helpers\Url::to(['/admin/']); ?>">Admin</a></li>
                                            <li><a href="<?= \yii\helpers\Url::to(['/site/logout']); ?>">Logout</a></li>
                                        <?php endif; ?>
                                        <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role == 2): ?>
                                            <li>
                                                <a href="<?= \yii\helpers\Url::to(['/admin/tstudents']); ?>">Students</a>
                                            </li>
                                            <li><a href="<?= \yii\helpers\Url::to(['/site/logout']); ?>">Logout</a></li>
                                        <?php endif; ?>


                                        <li class="dropdown_menu">
                                            <a class="dropdown_title" href="#">Uzb <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Rus</a></li>
                                                <li><a href="">Eng</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-left menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="index.html">Bosh sahifa</a></li>
                    <li class="menu_mm"><a href="#">Biz haqimizda</a></li>
                    <li class="menu_mm"><a href="#">Kurslar</a></li>
                    <li class="menu_mm"><a href="#">Yangiliklar</a></li>
                    <li class="menu_mm"><a href="contact.html">Aloqa</a></li>
                </ul>
            </nav>
            <div class="lang">
                <a href="#" class="itemss">Uzb</a>
                <a href="#" class="itemss">Rus</a>
                <a href="#" class="itemss">Eng</a>
            </div>
        </div>
        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><?= $this->title; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $content ?>

        <footer class="footer">
            <div class="footer_background" style="background-image:url(/images/footer_background.png)"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-4 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">Unic<span>at</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Email: Info.deercreative@gmail.com</li>
                                                <li>Phone: +(88) 111 555 666</li>
                                                <li>40 Baria Sreet 133/2 New York City, United States</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 footer_col">

                                    <div class="footer_section footer_links">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="#">Events</a></li>
                                                <li><a href="#">Gallery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
<?php
