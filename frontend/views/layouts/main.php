<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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

<header role="banner">
    <div class="navbar-fixed">
        <?=$this->render('_main_menu'); ?>
    </div>
    <?=$this->render(($this->context->route !== 'site/index')?'_header':'_header_home'); ?>
</header>
<main role="main">
    <div class="container mb4">
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?><!--
        --><?/*= Alert::widget() */?>
        <?= $content ?>
    </div>
</main>

<?=$this->render(($this->context->route !== 'site/index')?'_footer':'_footer_home'); ?>

<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
