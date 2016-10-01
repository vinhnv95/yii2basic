<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Dropdown;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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

<div class="wrap">
    <?php
    NavBar::begin([
//        'brandLabel' => 'My Company',
//        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => ' my-navbar navbar-default navbar-fixed-top',
        ],
    ]);
    $company = [
        ['label' => 'HBLab'],
        ['label' => 'HUST']
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            [
                'label' => 'My Company',
                'items' => $company
            ],
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-gift"></span> Bicycle', 'url' => ['/site/index']],
            '<li>'
            . Html::beginForm(['#'], 'post', ['class' => 'navbar-form'])
            . Html::Button(
                'Upgrade',
                ['class' => 'btn btn-default']
            )
            . Html::endForm()
            . '</li>',
            ['label' => '<span class="glyphicon glyphicon-yen"></span> 0', 'url' => ['/site/contact']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                /*'<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'*/
                [
                    'label' =>  '<span class="glyphicon glyphicon-user"></span> '
                        . Yii::$app->user->identity->username,
                    'items' => [
                        ['label' => 'Profile', 'url' => '#'],
                        '<hr>',
                        ['label' => 'Billing', 'url' => '#'],
                        ['label' => 'Change Plan', 'url' => '#'],
                        ['label' => 'Buy MailPoints', 'url' => '#'],
                        '<hr>',
                        ['label' => '日本語', 'url' => '#'],
                        ['label' => 'English', 'url' => '#'],
                        '<hr>',
                        [
                            'label' => 'Sign out',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ],

                    ],
                ]
            )
        ],
    ]);
    NavBar::end();
    ?>
    <? echo $this->render('menu');?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <ul class=" nav navbar-nav">
            <li><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Manual</a></li>
            <li><a href="#">Q&A</a></li>
            <li><a href="#">API</a></li>
            <li class="dropup">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">English <b class="caret"></b></a>
                    <?php
                    echo Dropdown::widget([
                        'items' => [
                            ['label' => 'English', 'url' => '#'],
                            ['label' => '日本語', 'url' => '#'],
                        ],
                    ]);
                    ?>
            </li>
        </ul>
        <span class="pull-right" style="margin-top: 15px">© 2016 MakeLeaps</span>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
