<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
/*use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;*/

use wii\materialize\Nav;
use wii\materialize\NavBar;

use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <!--<nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo grey-text text-darken-3">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" class="grey-text text-darken-3">Navbar Link</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav" style="left: -250px;">
                <li><a href="#" class="grey-text text-darken-3">Navbar Link</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>-->
    <?php
    NavBar::begin([
        'brandLabel' => 'NavBar Test',
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions' => [
            'class' => 'grey-text text-darken-3',
        ],
        'wraperContainerOptions' => [
            'class' => 'nav-wrapper container',
        ],
        'options' => [
            'class' => 'white',
            'role'  => 'navigation',
        ],
    ]);
    echo Nav::widget([
        'items' => [
            [
                'label' => 'Home',
                'url' => ['/site/index'],
                'linkOptions' => [
                    'class' => 'grey-text text-darken-3',
                ],
            ],
            [
                'label' => 'About',
                'url' => ['/site/about'],
                'linkOptions' => [
                    'class' => 'grey-text text-darken-3',
                ],
            ],
            [
                'label' => 'Contact',
                'url' => ['/site/contact'],
                'linkOptions' => [
                    'class' => 'grey-text text-darken-3',
                ],
            ],
        ],
        'options' => [
            'class' => 'right hide-on-med-and-down',
        ],
    ]);
    NavBar::end();
/*    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    */?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<!--</body>-->
</html>
<?php $this->endPage() ?>
