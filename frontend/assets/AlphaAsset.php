<?php
/**
 * Created by PhpStorm.
 * User: mvl
 * Date: 19.10.2015
 * Time: 15:55
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class AlphaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/screen.css',
    ];
    public $js = [
        'js/materialize.min.js',
    ];
}