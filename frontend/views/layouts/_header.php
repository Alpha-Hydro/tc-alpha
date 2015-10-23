<?php
    use yii\helpers\Html;
?>
<div class="parallax-container light-green bg-cover bg-center absolute">
    <div class="section-overlay"></div>
</div>
<div class="container page-header white-text mb3">
    <div class="row">
        <div class="col s8">
            <h1><?= Html::encode($this->title) ?></h1>
            <blockquote>
                <p><?= Html::encode($this->context->pageDescription)?></p>
            </blockquote>
        </div>
        <div class="col s4">
            <div class="row mt2">
                <div class="col l10 offset-l1">
                    <div class="card z-depth-1">
                        <div class="card-image">
                            <?= Html::img('/images/aaa250.jpg',['class' => 'responsive-img'])?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>