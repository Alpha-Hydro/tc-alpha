<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\widgets;

use Yii;
//use yii\bootstrap\Widget;
use wii\materialize\Widget;
//use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;

class ContactAlert extends Widget
{
    public $message;

    public $headMessage;

    public $wrapOptions = [];


    public function init()
    {
        parent::init();

        $this->clientOptions = false;
        Html::addCssClass($this->options, 'modal');

        $session = \Yii::$app->session;
        $flashes = $session->getAllFlashes();
        if(!empty($flashes)){
            foreach ($flashes as $type => $message) {
                Html::addCssClass($this->options, $type);
                $this->message = $message;
                if($type !== 'error')
                    $this->headMessage = ($type !== 'error')?'Ваше сообщение отправлено':'Ошибка';

                $session->removeFlash($type);
            }
            $this->view->registerJs('$(".modal").openModal()',View::POS_END);
        }
    }

    public function run(){
        return Html::tag('div', $this->renderBodyBegin(), $this->options);
    }

    protected function renderBodyBegin()
    {
        $body = Html::tag('div', $this->renderContent(), ['class' => 'modal-content']);
        $body .= Html::tag('div',$this->renderFooter(),['class'=>'modal-footer']);
        return $body;
    }

    protected function renderContent()
    {
        $content = Html::tag('h4',$this->headMessage);
        $content .= Html::tag('p',$this->message);
        return $content;
    }

    protected function renderFooter()
    {
        return Html::a('OK','#!',['class'=>'modal-action modal-close waves-effect waves-green btn']);
    }
}
