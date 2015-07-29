<?php
/**
 * @link https://bitbucket.org/hoksilato/yii2-metronic
 * @copyright Copyright (c) 2015 Cang Ta
 * @license https://bitbucket.org/hoksilato/yii2-metronic/LICENSE.md
 */

namespace hoksilato\metronic\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * if lt IE 9 javascript AssetBundle
 * @since 0.1
 */
class LtIE9JsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hoksilato/yii2-metronic/assets/static';

    /**
     * @inheritdoc
     */
    public $css = [
    ];

    /**
     * @inheritdoc
     */
    public $jsOptions = ['condition' => 'lte IE 9'];

    /**
     * @inheritdoc
     */
    public $js = [
        'global/plugins/respond.min.js',
        'global/plugins/excanvas.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
    ];
}