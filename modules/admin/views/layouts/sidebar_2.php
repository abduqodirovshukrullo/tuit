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
                            'label' => 'Student info',
                            'url' => ['../admin/tstudents/'],
                            'icon' => '<i class="fa fa-file-text-o"></i>',
//                            'items' => [
//                                [
//                                    'label' => 'Students',
//                                    'url' => ['tstudents/'],
//                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
//                                ],
//                        ],
                    ]
                    ]
                ]);
            } catch ( Exception $e ) {
            }

            ?>
        </nav>
    </div>
</div>
