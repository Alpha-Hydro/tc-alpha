<?php
use yii\helpers\Html;
use yii\helpers\Url;
use rmrevin\yii\fontawesome\FA;
?>
<footer class="page-footer top-shadow grey lighten-3 grey-text text-lighten-1 pt0 mt0">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="text-shadow-black">Контакты</h5>
                <div class="divider"></div>
                <blockquote class="grey-border border-lighten-2">
                    <p><strong>Санкт-Петербург, Горелово, ул. Коммунаров, д.118А</strong></p>
                    <div class="divider"></div>
                    <p><strong>Тел.:</strong> 8(812)921-77-66</p>
                    <p><strong>Факс:</strong> 8(812)921-77-66</p>
                    <p><strong>Режим работы:</strong> с 10.00 до 22.00</p>
                    <p><strong>Email:</strong> info@tc-alpha.ru</p>
                </blockquote>

            </div>
            <div class="col l4 offset-l2 s12">
                <h5>Ссылки</h5>
                <div class="divider mb1"></div>
                <ul>
                    <li><?=Html::a('О компании','/site/about',['class' => 'grey-text text-lighten-1'])?></li>
                    <li><?=Html::a('Контакты','/site/contact',['class' => 'grey-text text-lighten-1'])?></a></li>
                </ul>
                <div class="divider mt2 mb1"></div>
                <ul>
                    <li class="inline mr1"><a href="#!" class="grey-text text-lighten-1"><?=FA::icon('vk')->size(FA::SIZE_2X);?></a></li>
                    <li class="inline mr1"><a href="#!" class="grey-text text-lighten-1"><?=FA::icon('google-plus')->size(FA::SIZE_2X);?></a></li>
                    <li class="inline mr1"><a href="#!" class="grey-text text-lighten-1"><?=FA::icon('twitter')->size(FA::SIZE_2X);?></a></li>
                    <li class="inline mr1"><a href="mailto::info@tc-alpha.ru" class="grey-text text-lighten-1"><?=FA::icon('envelope')->size(FA::SIZE_2X);?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container p0 grey-text text-darken-1 center-align">
            &copy; <?= date('Y') ?> Торговый дом "Альфа"
        </div>
    </div>
</footer>
