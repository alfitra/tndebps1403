<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Button;
use yii\bootstrap\Alert;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <nav class="navbar navbar-default no-margin">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                        <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-archive fa-4"></i> TNDE BPS1403</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active" >
                            <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> 
                                <span class="fa fa-bars" aria-hidden="true"></span>
                            </button>
                        </li>
                    </ul>
                    <?php
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => [
                                ['label' => 'Home', 'url' => ['/site/index']],
                            Yii::$app->user->isGuest ? (
                                        ['label' => 'Login', 'url' => ['/site/login']]
                                    ) : (
                                    '<li>'
                                    . Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                    )
                        ],
                    ]);
                    ?>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <?php
//        NavBar::begin([
//            'brandLabel' => 'Badan Pusat Statistik Kabupaten Indragiri Hilir',
//            'brandUrl' => Yii::$app->homeUrl,
//            'options' => [
//                'class' => 'navbar navbar-default no-margin navbar-inverse',
//            ],
//        ]);
//        echo Nav::widget([
//            'options' => ['class' => 'navbar-nav navbar-right'],
//            'items' => [
//                    ['label' => 'Home', 'url' => ['/site/index']],
//                    ['label' => 'About', 'url' => ['/site/about']],
//                    ['label' => 'Contact', 'url' => ['/site/contact']],
//                Yii::$app->user->isGuest ? (
//                            ['label' => 'Login', 'url' => ['/site/login']]
//                        ) : (
//                        '<li>'
//                        . Html::beginForm(['/site/logout'], 'post')
//                        . Html::submitButton(
//                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
//                        )
//                        . Html::endForm()
//                        . '</li>'
//                        )
//            ],
//        ]);
//        NavBar::end();
        ?>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                    <li class="active">
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-envelope-open fa-stack-1x "></i></span>Surat Masuk</a>
                    </li>
                    <li>
                        <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-envelope fa-stack-1x "></i></span>Surat Keluar</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-paper-plane fa-stack-1x "></i></span>Disposisi</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x "></i></span> Template Surat</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>Surat Dinas</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>Surat Tugas</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>Surat Perjadin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cog fa-stack-1x "></i></span> Master</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="<?= Url::to(['satker/index']) ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>Satuan Kerja</a></li>
                            <li><a href="<?= Url::to(['subject/index']) ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>Subject Matter</a></li>
                            <li><a href="<?= Url::to(['dasar/index']) ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>Dasar Hukum</a></li>
                            <li><a href="<?= Url::to(['anggaran/index']) ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>Pembebanan Anggaran</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-desktop fa-stack-1x "></i></span> CKP Online</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>CKP Target</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle fa-stack-1x "></i></span>CKP Realisasi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['pegawai/index']) ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x "></i></span>Pegawai</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x "></i></span>Atur Pengguna</a>
                    </li>
                </ul>
            </div><!-- /#sidebar-wrapper -->
            <div id="page-content-wrapper">
                <div class="container-fluid xyz">
                    <div class="row">
                        <div class="col-lg-12">
                            <?=
                            Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ])
                            ?>
                            <?php if (Yii::$app->session->hasFlash('success')): ?>
                                <?=
                                Alert::widget([
                                    'options' => ['class' => 'alert-success'],
                                    'body' => Yii::$app->session->getFlash('success'),
                                ]);
                                ?>
                            <?php endif ?>
                            <?php if (Yii::$app->session->hasFlash('error')) : ?>
                                <?=
                                Alert::widget([
                                    'options' => ['class' => 'alert-danger'],
                                    'body' => Yii::$app->session->getFlash('error'),
                                ]);
                                ?>
                            <?php endif; ?>
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!--                <footer class="footer">
                                <address>
                                    <p class=""><strong>&copy; BPS Kabupaten Indragiri Hilir <?= date('Y') ?></strong></p>
                                    Jl. Praja Sakti (Bunga) No. 11<br>
                                    Tembilahan Hilir, 29212<br>
                                    <abbr title="Phone">Telp:</abbr> (0768) 22489<br>
                                    Hompepage: <a href="https://inhilkab.bps.go.id" target="_blank">inhilkab.bps.go.id</a><br>
                                    E-mail: <a href="mailto:bps1403@bps.go.id">bps1403@bps.go.id</a>
                                </address>
                        </footer>-->


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
