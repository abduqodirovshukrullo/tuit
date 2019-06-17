<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<style>
    .counter_form {
        position: static;
        width: 100%;
        max-width: 400px;
        padding: 30px;
        margin-left: auto;
    }
    .counter_form .form-group {
        width: 100%;
    }
</style>
!-- Home -->
<div class="home">
    <?php if(yii::$app->session->hasFlash('error')):?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
    <?php endif; ?>
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">
            <?php foreach ($carousels as $carousel): ?>
                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background"
                         style="background-image:url(<?= '/web/uploads/' . $carousel->image; ?>)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title"><?= $carousel->title_uz; ?></div>
                                    <div class="home_slider_subtitle"><?= $carousel->content_uz; ?></div>
                                    <div class="home_slider_form_container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Home Slider Nav -->

<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>

<!-- Popular Courses -->

<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll"
         data-image-src="/images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Bizning Kursalar</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel
                            gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis
                            sem</p></div>
                </div>
            </div>
        </div>
        <div class="row courses_row">
            <?php foreach ($courses as $course): ?>
                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="<?= '/web/uploads/' . $course->image; ?>" alt=""></div>
                        <div class="course_body">
                            <h3 class="course_title"><a href="#"><?= $course->title_uz; ?></a></h3>
                            <!--                        <div class="course_teacher">Mr. John Taylor</div>-->
                            <div class="course_text">
                                <p><?= $course->content_uz ?></p>
                            </div>
                        </div>
                        <!--                    <div class="course_footer">-->
                        <!--                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
                        <!--                            <div class="course_info">-->
                        <!--                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
                        <!--                                <span>20 Student</span>-->
                        <!--                            </div>-->
                        <!--                            <div class="course_info">-->
                        <!--                                <i class="fa fa-star" aria-hidden="true"></i>-->
                        <!--                                <span>5 Ratings</span>-->
                        <!--                            </div>-->
                        <!--                            <div class="course_price ml-auto">$130</div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="<?= \yii\helpers\Url::to(['../site/courses']) ?>">view
                        all courses</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Counter -->

<div class="counter">
    <div class="counter_background" style="background-image:url(/images/counter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="counter_content">
                    <h2 class="counter_title">Register Now</h2>
                    <div class="counter_text"><p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry’s standard dumy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book.</p></div>

                    <!-- Milestones -->

                    <div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

                        <!-- Milestone -->
                        <div class="milestone">
                            <!--                            <div class="milestone_counter" data-end-value="15">0</div>-->
                            <!--                            <div class="milestone_text">years</div>-->
                        </div>

                        <!-- Milestone -->
                        <div class="milestone">
                            <!--                            <div class="milestone_counter" data-end-value="120" data-sign-after="k">0</div>-->
                            <!--                            <div class="milestone_text">years</div>-->
                        </div>

                        <!-- Milestone -->
                        <div class="milestone">
                            <!--                            <div class="milestone_counter" data-end-value="670" data-sign-after="+">0</div>-->
                            <!--                            <div class="milestone_text">years</div>-->
                        </div>

                        <!-- Milestone -->
                        <div class="milestone">
                            <!--                            <div class="milestone_counter" data-end-value="320">0</div>-->
                            <!--                            <div class="milestone_text">years</div>-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 regular-padding">

                <div class="counter_form">

                    <div class="row fill_height">
                        <div class="col fill_height">

                            <?php $form = ActiveForm::begin(['options' => ['class' => 'counter_form_content d-flex flex-column align-items-center justify-content-center']]); ?>
                            <div class="counter_form_title">courses now</div>
                            <!--    --><? //= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'name')->textInput([ 'class' => 'counter_input']) ?>

                            <!--    --><? //= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'surname')->textInput(['class' => 'counter_input']) ?>

                            <!--    --><? //= $form->field($model, 'surname_ru')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'group')->textInput(['class' => 'counter_input']) ?>

                            <?= $form->field($model, 'subject')->textInput(['class' => 'counter_input']) ?>

                            <?= $form->field($model, 'phone')->textInput(['class' => 'counter_input']) ?>

                            <?= $form->field($model, 'email')->textInput(['class' => 'counter_input']) ?>
                            <div class="form-group">
                                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'counter_form_button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                            <!--                <form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">-->
                            <!--                    <div class="counter_form_title">courses now</div>-->
                            <!--                    <input type="text" class="counter_input" placeholder="Your Name:" required="required">-->
                            <!--                    <input type="tel" class="counter_input" placeholder="Phone:" required="required">-->
                            <!--                    <input type="number" class="counter_input" placeholder="Guruhingiz" required="required">-->
                            <!--                    <input type="Email" class="counter_input" placeholder="Email pochtangiz" required="required">-->
                            <!--                    <select name="counter_select" id="counter_select" class="counter_input counter_options">-->
                            <!--                        <option>Choose Subject</option>-->
                            <!--                        <option>Subject</option>-->
                            <!--                        <option>Subject</option>-->
                            <!--                        <option>Subject</option>-->
                            <!--                    </select>-->
                            <!-- <textarea class="counter_input counter_text_input" placeholder="Message:" required="required"></textarea> -->
                            <!--                    <button type="submit" class="counter_form_button">submit now</button>-->
                            <!--                </form>-->

                            <!--            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Team -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="/images/team_background.jpg"
         data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Bizning Jamoa</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel
                            gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis
                            sem</p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">
            <?php foreach ($tutors as $tutor): ?>
                <!-- Team Item -->
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="<?= '/web/uploads/' . $tutor->image ?>" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#"><?= $tutor->name . ' ' . $tutor->surname ?></a></div>
                            <div class="team_subtitle"><?= $tutor->role_uz ?></div>
                            <div class="social_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Team Item -->

        </div>
    </div>
</div>

<!-- Latest News -->

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Yangiliklar</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel
                            gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis
                            sem</p></div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            <div class="col-lg-7 news_col">

                <!-- News Post Large -->
                <div class="news_post_large_container">
                    <div class="news_post_large">
                        <div class="news_post_image"><img src="/web/uploads/<?= $actives->image; ?>" alt=""></div>
                        <div class="news_post_large_title"><a href="blog_single.html"><?= $actives->title_uz; ?></a>
                        </div>
                        <div class="news_post_meta">

                        </div>
                        <div class="news_post_text">
                            <p><?= $actives->content_uz; ?></p>
                        </div>
                        <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 news_col">
                <div class="news_posts_small">
                    <?php foreach ($mains as $main): ?>
                        <!-- News Posts Small -->
                        <div class="news_post_small">
                            <div class="news_post_small_title"><a href="blog_single.html"><?= $main->title_uz; ?></a>
                            </div>
                            <div class="news_post_meta">

                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>


