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
                            'label' => 'Teacher Page',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Home Page',
                                    'url' => ['home-page/view','id' => 1],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Carousel',
                                    'url' => ['carousel/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Process of Translation',
                                    'url' => ['process/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Advantages',
                                    'url' => ['advantages/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Partners',
                                    'url' => ['partners/index'],
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
                                    'url' => ['about/view','id' => 1],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Workers',
                                    'url' => ['workers/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Vacancies',
                                    'url' => ['vacancy/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label' => 'Pages',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Contacts Page',
                                    'url' => ['contacts/view','id' => 1],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Blog Page',
                                    'url' => ['blog/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Courses Page',
                                    'url' => ['courses/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Services page',
                                    'url' => ['service/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Spheres of translations',
                                    'url' => ['spheres/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label' => 'Orders',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Order Services',
                                    'url' => ['order/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Translator',
                                    'url' => ['translator/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Written Translation',
                                    'url' => ['written-translation/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                            ]
                        ],
                        [
                            'label' => 'Feedback',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Feedback',
                                    'url' => ['feedback/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Comments',
                                    'url' => ['comments/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
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
