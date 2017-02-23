<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;

$bundle = yiister\gentelella\assets\Asset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="nav-md">
<?php $this->beginBody(); ?>
<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-database"></i> <span>Admin Panel</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>ผู้ดูแลระบบ</h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>ADMIN</h3>
                        <?php
                      //   $user = 'member';
                      //   if($user=='member'){
                      //   echo
                      //   \yiister\gentelella\widgets\Menu::widget(
                      //       [
                      //           "items" => [
                      //
                      //               ["label" => "Webboard", "url" => ["webboard/index"], "icon" => "user"],
                      //
                      //           ],
                      //       ]
                      //   );
                      // }else{
                        echo
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => "Home", "url" => ["site/index"], "icon" => "home"],
                                    ["label" => "Member", "url" => ["member/index"], "icon" => "user"],
                                    ["label" => "Student", "url" => ["student/index"], "icon" => "user"],
                                    ["label" => "Webboard", "url" => ["webboard-topic/index"], "icon" => "user"],
                                    ["label" => "Status", "url" => ["status/index"], "icon" => "user"],
                                    ["label" => "Prefix", "url" => ["prefix/index"], "icon" => "user"],
                                ],
                            ]
                        );
                      //}
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu -->


                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu"style="background:#03A9F4;">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>

                    </div>
                    <h2 style="width:500px;margin:0px;float:left;padding-top:18px;color:#795548];"> Alumni Information Techonology Management System</h2>

                    <ul class="nav navbar-nav navbar-right"style="width:300px;">
                        <li class="">

                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>

                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>

            <?= $content ?>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                ระบบสารสนเทศศิษย์เก่าสาขาวิชาการจัดการเทคโนโลยีสารสนเทศ</a><br />
                Alumni Information Techonology Management System</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

</div>


<!-- /footer content -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
