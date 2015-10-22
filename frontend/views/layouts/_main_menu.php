<?php
use yii\helpers\Html;
use wii\materialize\Nav;
use wii\materialize\NavBar;


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
        'class' => ($this->context->route !== 'site/index')?'white':'transparent',
        'role'  => 'navigation',
    ],
]);
echo Nav::widget([
    'items' => [
        [
            'label' => 'Главная',
            'url' => ['/site/index'],
            'linkOptions' => [
                'class' => ($this->context->route !== 'site/index')?'grey-text text-darken-3':'',
            ],
            'active' => false,
        ],
        [
            'label' => 'О компании',
            'url' => ['/site/about'],
            'linkOptions' => [
                'class' => ($this->context->route !== 'site/index')?'grey-text text-darken-3':'',
            ],
        ],
        [
            'label' => 'Контакты',
            'url' => ['/site/contact'],
            'linkOptions' => [
                'class' => ($this->context->route !== 'site/index')?'grey-text text-darken-3':'',
            ],
        ],
        [
            'label' => '8(812)921-77-66',
            'url' => false,
            'linkOptions' => [
                'class' => 'orange-text text-darken-2',//'grey-text text-darken-3',
            ],
            'options' => [
                'class' => 'top-contact-tel'
            ]
        ],
    ],
    'buttonCollapse' => true,
    'buttonCollapseLabel' => Html::tag('i','menu',['class'=>'material-icons']),
    'buttonCollapseOptions' => [
        //'class' => 'grey-text text-darken-3',
    ],
    'options' => [
        'class' => 'right hide-on-med-and-down',
    ],
]);
NavBar::end();
