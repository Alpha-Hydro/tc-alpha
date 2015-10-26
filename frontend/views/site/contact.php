<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\widgets\Alert;
use common\widgets\ContactAlert;
use yii\web\View;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('/js/contact.min.js', ['depends' => ['yii\web\YiiAsset','wii\materialize\MaterializeAsset']]);
?>
<div class="row">
    <div class="col l7 s12">
        <h5 class="orange-text">Обратная связь</h5>
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <?= $form->field($model, 'name', [
                'template' => '<div class="input-field"><i class="material-icons prefix">account_circle</i>{input}{label}{hint}</div>',
                'inputOptions' => [
                    'class' => 'validate',
                    'required' => 'required',
                ],
            ])->label('Ваше имя', [
                'class' => null,
                //'data-error'=> 'wrong',
            ]) ?>
            <?= $form->field($model, 'email', [
                'template' => '<div class="input-field"><i class="material-icons prefix">email</i>{input}{label}{hint}</div>',
                'inputOptions' => [
                    'class' => 'validate',
                    'type' => 'email',
                    'required' => 'required',
                ],
            ])->label('Ваш еmail', [
                'class' => null,
                //'data-error'=> 'wrong',
            ])  ?>
            <?= $form->field($model, 'subject', [
                'template' => '<div class="input-field"><i class="material-icons prefix">subject</i>{input}{label}{hint}</div>',
                'inputOptions' => [
                    'class' => 'validate',
                    'required' => 'required',
                ],
            ])->label('Тема сообщения', [
                'class' => null,
                //'data-error'=> 'wrong',
            ]) ?>
            <?= $form->field($model, 'body',[
                'template' => '<div class="input-field"><i class="material-icons prefix">mode_edit</i>{input}{label}{hint}</div>',
            ])->textArea([
                'class' => 'materialize-textarea',
                'rows' => 8,
                'required' => 'required',
            ])->label('Ваше сообщение', [
                'class' => null,
                //'data-error'=> 'wrong',
            ]) ?>
            <div class="row">
                <div class="col s9">
                    <?= $form->field($model, 'verifyCode', ['inputOptions' => ['class'=>'captcha']])->widget(Captcha::className(), [
                        'template' => '<div class="col s4">{image}</div><div class="col s5">{input}</div>',
                        'options' => [
                            'class' => 'validate',
                            'required' => 'required',
                        ],
                    ])->label(false) ?>
                </div>
                <div class="col s3 relative">
                    <div class="absolute bottom right">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col l4 offset-l1 s12">
        <div class="contact-card">
            <h5 class="orange-text">Контакты</h5>
            <div class="card-panel">
                <address>
                    <strong>Адрес:</strong><br>
                    Санкт-Петербург, Горелово,<br>
                    ул. Коммунаров, д.118А<br>
                </address>
                <address>
                    <strong>Телефон:</strong><br>
                    8(812)921-77-66<br>
                </address>
                <address>
                    <strong>Факс:</strong><br>
                    8(812)921-77-66<br>
                </address>
                <address>
                    <strong>Режим работы:</strong><br>
                    с 10.00 до 22.00<br>
                </address>
                <address>
                    <strong>Электронная почта:</strong><br>
                    <a href="mailto://info@tc-alpha.ru">info@tc-alpha.ru</a><br>
                </address>
            </div>
        </div>
    </div>
</div>
<div class="divider mtb2"></div>
<div class="row">
    <div class="col s12">
        <div class="card medium">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2007.775630971032!2d30.14916271609084!3d59.786416881821125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963cf4967f5a0b%3A0xf64fdf7f5b6cb861!2z0YPQuy4g0JrQvtC80LzRg9C90LDRgNC-0LIsIDExOCwg0JPQvtGA0LXQu9C-0LLQviwg0LMuINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCAxOTgzMjM!5e0!3m2!1sru!2sru!4v1445854000788" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?= ContactAlert::widget([
    'closeButton' => false,
    'body' => 'Say hello...',
]) ?>

<!--<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>
--><?php /*$this->registerJs("$('#modal1').openModal();", View::POS_END);*/?>
