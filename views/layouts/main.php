<?php
    $bundle = \oneui\assets\OneuiAsset::register($this);
    use yii\bootstrap\Html;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
-->
<div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </button>
                <span class="font-w600">John Parker</span>
            </div>
            <!-- END Side Header -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Header -->
    <header id="header-navbar">
        <div class="content-mini content-mini-full content-boxed">
            <!-- Header Navigation Right -->
            <ul class="nav-header pull-right">
                <li>
                    <? if (Yii::$app->user->isGuest): ?>
                        <?= Html::a('Войти', ['/site/login', 'authclient' => 'vkontakte'], ['class' => 'btn btn-danger']); ?>
                    <? else: ?>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="true">
                                <?= Html::encode(Yii::$app->user->getIdentity()->username); ?>
                                <span class="caret push-5-l"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="divider"></li>
                                <li>
                                    <?= Html::a('<i class="si si-logout pull-right"></i> Выйти', \yii\helpers\Url::to(['/site/logout'])) ?>
                                </li>
                            </ul>
                        </div>
                    <? endif; ?>
                </li>
            </ul>
            <!-- END Header Navigation Right -->

            <!-- Header Navigation Left -->
            <ul class="nav-header pull-left">
                <li class="header-content">
                    <a class="h5" href="index.html">
                        <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-primary-dark">ne</span>
                    </a>
                </li>
            </ul>
            <!-- END Header Navigation Left -->
        </div>
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Sub Header -->
        <div class="bg-gray-lighter visible-xs">
            <div class="content-mini content-boxed">
                <button class="btn btn-block btn-default visible-xs push" data-toggle="collapse" data-target="#sub-header-nav">
                    <i class="fa fa-navicon push-5-r"></i>Menu
                </button>
            </div>
        </div>
        <div class="bg-primary-lighter collapse navbar-collapse remove-padding" id="sub-header-nav">
            <div class="content-mini content-boxed">
                <!-- <ul class="nav nav-pills nav-sub-header push">
                    <li class="active">
                        <a href="bd_dashboard.html">
                            <i class="fa fa-dashboard push-5-r"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="bd_products.html">
                            <i class="fa fa-briefcase push-5-r"></i>Products
                        </a>
                    </li>
                    <li>
                        <a href="bd_customers.html">
                            <i class="fa fa-users push-5-r"></i>Customers
                        </a>
                    </li>
                    <li>
                        <a href="bd_sales.html">
                            <i class="fa fa-paypal push-5-r"></i>Sales
                        </a>
                    </li>
                    <li>
                        <a href="bd_settings.html">
                            <i class="fa fa-cog push-5-r"></i>Settings
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-coffee push-5-r"></i>More <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0)">Payment</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Privacy</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="javascript:void(0)">Shop</a>
                            </li>
                        </ul>
                    </li>
                </ul> -->
                <?= \oneui\widgets\Menu::widget([
                    'items' => [
                        [
                            'label' => 'Список пользователей',
                            'url' => ['/admin/user/index'],
                            'icon' => 'fa fa-user'
                        ],
                        [
                            'label' => 'Список анкет',
                            'url' => '#',
                            'icon' => 'fa fa-list',
                            'items' => [
                                [
                                    'label' => 'Добавить анкету',
                                    'url' => ['/admin/lead/create'],
                                    'icon' => 'fa fa-edit'
                                ],
                            ],

                        ]
                    ]
                ]) ?>
            </div>
        </div>
        <!-- END Sub Header -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <?= $content ?>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body font-s12">
        <div class="content-mini content-mini-full content-boxed clearfix push-15">
            <div class="pull-right">
                Crafted with <?= Yii::powered() ?>
            </div>
            <div class="pull-left">
                <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.1</a> &copy; <span class="js-year-copy"></span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>