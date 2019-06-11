<?php
/**
 * Created by PhpStorm.
 * User: Farhodjon
 * Date: 10.03.2018
 * Time: 15:17
 */

use app\modules\admin\widgets\Menu;
use yii\helpers\Url;

?>
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <?php
            try {
                echo Menu::widget([
                    'options' => [ 'id' => 'sidebarnav' ],
                    'submenuTemplate' => "\n<ul aria-expanded='false' class='collapse'>\n{items}\n</ul>\n",
                    'badgeClass' => 'label label-rouded label-primary pull-right',
                    'activateParents' => true,
                    'items' => [
                        [
                            'label' => '',
                            'options' => [ 'class' => 'nav-devider' ]
                        ],
                        [
                            'label' => 'Home',
                            'options' => [ 'class' => 'nav-label' ]
                        ],
                        [
                            'label' => 'Dashboard',
                            'url' => ['default/index'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                        ],
                        [
                            'label' => 'Home Page',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

//                                [
//                                    'label' => 'Home Page',
//                                    'url' => ['home-page/view','id' => 1],
//                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
//                                ],
                                    [
                                    'label' => 'Carousel',
                                    'url' => ['../admin/carousel/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label' => 'About Page',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'About Page',
                                    'url' => ['../admin/about/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
//                                [
//                                    'label' => 'Workers',
//                                    'url' => ['workers/index'],
//                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
//                                ],
//                                [
//                                    'label' => 'Vacancies',
//                                    'url' => ['vacancy/index'],
//                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
//                                ],
                            ]
                        ],
                        [
                            'label' => 'Pages',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Contacts Page',
                                    'url' => ['../admin/contact/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Blog Page',
                                    'url' => ['blog/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Courses',
                                    'url' => ['../admin/courses/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label' => 'Students',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Students',
                                    'url' => ['../admin/students/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
//                                [
//                                    'label' => 'Translator',
//                                    'url' => ['translator/index'],
//                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
//                                ],
//                                [
//                                    'label' => 'Written Translation',
//                                    'url' => ['written-translation/index'],
//                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
//                                ],
                            ]
                        ],
                        [
                            'label' => 'Add Teachers',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Add Teacher',
                                    'url' => ['../admin/useradd/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
//                                [
//                                    'label' => 'Comments',
//                                    'url' => ['comments/index'],
//                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
//                                ],
                            ]
                        ],
                        [
                            'label' => 'Roles',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [
                                [
                                    'label' => 'Assign Role',
                                    'url' => ['../rbac/assignments'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
//
                            ]
                        ],
                    ]
                ]);
            } catch ( Exception $e ) {
            }
            
            ?>
        </nav>
    </div>
</div>
