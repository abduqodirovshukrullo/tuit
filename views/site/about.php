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
<!--<div class="home">-->
<!--    <div class="breadcrumbs_container">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col">-->
<!--                    <div class="breadcrumbs">-->
<!--                        <ul>-->
<!--                            <li><a href="index.html">Home</a></li>-->
<!--                            <li>About</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- About -->

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
            <div class="col-lg-4 about_col about_col_left">
                <div class="about_item">
                    <div class="about_item_image"><img src="/images/about_1.jpg" alt=""></div>
                    <div class="about_item_title"><a href="#">Our Stories</a></div>
                    <div class="about_item_text">
                        <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                    </div>
                </div>
            </div>

            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_middle">
                <div class="about_item">
                    <div class="about_item_image"><img src="/images/about_2.jpg" alt=""></div>
                    <div class="about_item_title"><a href="#">Our Mission</a></div>
                    <div class="about_item_text">
                        <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                    </div>
                </div>
            </div>

            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_right">
                <div class="about_item">
                    <div class="about_item_image"><img src="/images/about_3.jpg" alt=""></div>
                    <div class="about_item_title"><a href="#">Our Vision</a></div>
                    <div class="about_item_text">
                        <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Team -->

<div class="team">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">The Best Tutors in Town</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="/images/team_1.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                        <div class="team_subtitle">Marketing & Management</div>
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

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="/images/team_2.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">William James</a></div>
                        <div class="team_subtitle">Designer & Website</div>
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

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="/images/team_3.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">John Tyler</a></div>
                        <div class="team_subtitle">Quantum mechanics</div>
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

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="/images/team_4.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Veronica Vahn</a></div>
                        <div class="team_subtitle">Math & Physics</div>
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

        </div>
    </div>
</div>