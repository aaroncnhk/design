<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/style/style-894e3466.css',
        'statics/style/font-awesome.min.css',
    ];
    public $js = [
        'statics/script/bbt6nca.js',
        'statics/script/jquery-2.0.3.min.js',
        'statics/script/essentials-50e00e0c.js',
        'statics/script/common-af8b7d27.js',
        'statics/script/index-ef662d12.js',
        'statics/script/up_up_down_down-d024d8ff.js',
    ];
    public $depends = [
//         'yii\web\YiiAsset',
//         'yii\bootstrap\BootstrapAsset',
    ];
}
