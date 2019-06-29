<?php
use app\assets\AboutAppAsset;
AboutAppAsset::register($this);
//use yii\web\View;

/** @var TYPE_NAME $registerCssFile */
//$this->registerCssFile('@web/styles/courses.css');
$this->registerCssFile('@web/styles/about.css');
$this->registerCssFile('@web/styles/about_responsive.css');
$this->title = 'About';
?>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Welcome To Unicat E-Learning</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu Vestibulum</p></div>
                </div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Item -->
            <?php foreach($about as $item): ?>
                    <div class="col-lg-4 about_col about_col_left">
                        <div class="about_item">
                            <div class="about_item_image"><img src="<?= '/web/uploads/' .$item->img ?>" alt=""></div>
                            <div class="about_item_title"><a href="#"><?= $item->title_uz ?></a></div>
                            <div class="about_item_text">
                                <p><?= $item->content_uz ?></p>
                            </div>
                        </div>
                    </div>
            <?php endforeach;?>

        </div>
    </div>
</div>


<!-- Team -->

<div class="team">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Bizning jamoa</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
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


        </div>
    </div>
</div>