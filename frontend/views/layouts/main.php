<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('/images/logo_nav_gray_cart.png'),
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
                'label' => 'Главная',
                'url' => ['/site/index'],
                'linkOptions' => [
                    'class' => 'grey-text text-darken-3',
                ],
            ],
            [
                'label' => 'О компании',
                'url' => ['/site/about'],
                'linkOptions' => [
                    'class' => 'grey-text text-darken-3',
                ],
            ],
            [
                'label' => 'Контакты',
                'url' => ['/site/contact'],
                'linkOptions' => [
                    'class' => 'grey-text text-darken-3',
                ],
            ],
            [
                'label' => '8(812)921-77-66',
                'url' => false,
                'linkOptions' => [
                    'class' => ' light-green-text',
                ],
                'options' => [
                    'class' => 'top-contact-tel'
                ]
            ],
        ],
        'buttonCollapse' => true,
        'buttonCollapseLabel' => '<i class="material-icons">menu</i>',
        'buttonCollapseOptions' => [
            'class' => 'grey-text text-darken-3',
        ],
        'options' => [
            'class' => 'right hide-on-med-and-down',
        ],
    ]);
    NavBar::end();
    ?>

    <?php if($this->context->route == 'site/index'): ?>
        <div class="parallax-container light-green"></div>
    <?php endif; ?>

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
</html>
<?php $this->endPage() ?>
