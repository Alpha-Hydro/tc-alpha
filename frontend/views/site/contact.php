<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">


    <div class="row">
        <div class="col l8">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name', [
                    'template' => '<div class="input-field"><i class="material-icons prefix">account_circle</i>{input}{label}{hint}</div>',
                    'inputOptions' => [
                        'class' => 'validate',
                        'required' => 'required',
                    ],
                ])->label('Ваше имя', [
                    'class' => null,
                    'data-error'=> 'wrong',
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
                    'data-error'=> 'wrong',
                ])  ?>

                <?= $form->field($model, 'subject', [
                    'template' => '<div class="input-field"><i class="material-icons prefix">subject</i>{input}{label}{hint}</div>',
                    'inputOptions' => [
                        'class' => 'validate',
                        'required' => 'required',
                    ],
                ])->label('Тема сообщения', [
                    'class' => null,
                    'data-error'=> 'wrong',
                ]) ?>


                <?= $form->field($model, 'body',[
                    'template' => '<div class="input-field"><i class="material-icons prefix">mode_edit</i>{input}{label}{hint}</div>',
                ])->textArea([
                    'class' => 'materialize-textarea',
                    'rows' => 8,
                    'required' => 'required',
                ])->label('Ваше сообщение', [
                    'class' => null,
                    'data-error'=> 'wrong',
                ]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="col l4"></div>

</div>
