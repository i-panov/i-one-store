<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dist/fonts.css',
        'dist/main.css',
    ];
    public $js = [
        'https://unpkg.com/@popperjs/core@2',
        'https://unpkg.com/tippy.js@6',
        'dist/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
