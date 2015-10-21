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

<div class="layout">
    <div class="navbar-fixed">
        <?php
            NavBar::begin([
                'brandLabel' => 'Торговый дом Альфа',
                'brandUrl' => Yii::$app->homeUrl,
                'brandOptions' => [
                    'class' => 'brand-logo-image',
                ],
                'wraperContainerOptions' => [
                    'class' => 'nav-wrapper container',
                ],
                'options' => [
                    'class' => 'light-green',
                    'role'  => 'navigation',
                ],
            ]);
            echo Nav::widget([
                'items' => [
                    [
                        'label' => 'Главная',
                        'url' => ['/site/index'],
                        'linkOptions' => [
                            //'class' => 'grey-text text-darken-3',
                        ],
                        'active' => false,
                    ],
                    [
                        'label' => 'О компании',
                        'url' => ['/site/about'],
                        'linkOptions' => [
                            //'class' => 'grey-text text-darken-3',
                        ],
                    ],
                    [
                        'label' => 'Контакты',
                        'url' => ['/site/contact'],
                        'linkOptions' => [
                            //'class' => 'grey-text text-darken-3',
                        ],
                    ],
                    [
                        'label' => '8(812)921-77-66',
                        'url' => false,
                        'linkOptions' => [
                            'class' => 'grey-text text-darken-3',//'orange-text text-darken-2',
                        ],
                        'options' => [
                            'class' => 'top-contact-tel'
                        ]
                    ],
                ],
                'buttonCollapse' => true,
                'buttonCollapseLabel' => '<i class="material-icons">menu</i>',
                'buttonCollapseOptions' => [
                    //'class' => 'grey-text text-darken-3',
                ],
                'options' => [
                    'class' => 'right hide-on-med-and-down',
                ],
            ]);
            NavBar::end();
        ?>
    </div>
    <?php if($this->context->route == 'site/index'): ?>
        <div class="parallax-container light-green">
            <div class="section-overlay"></div>
        </div>
    <?php endif; ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    <div class="layout-footer"></div>
</div>

<footer class="page-footer transparent grey-text text-darken-3 pt0 mt0">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5>Footer Content</h5>
                <p>You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5>Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; <?= date('Y') ?> Торговый дом "Альфа"
            <a class="right white-text" href="#!">More Links</a>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
