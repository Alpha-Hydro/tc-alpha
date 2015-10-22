<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Торговый дом "Альфа"';
?>

<div class="card p1 transparent">
    <div class="card-content white-text center-align">
        <p class="flow-text">ТД "Альфа" это торговый центр площадью 1500 кв.м., на которой расположено множество больших и маленьких магазинов с товарами на любой вкус от продуктового магазина до парикмахерской, от аптеки до магазина игрушек.</p>
    </div>
    <div class="card-action center-align">
        <a class="waves-effect waves-light btn-large green darken-1 white-text" href="<?= Url::toRoute('/site/about');?>">Узнать больше<i class="material-icons right">send</i></a>
    </div>
</div>
