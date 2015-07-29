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
 * Metronic AssetBundle
 * @since 0.1
 */
class MetronicAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hoksilato/yii2-metronic/assets/static';

    /**
     * @inheritdoc
     */
    public $css = [
        // Global mandatory styles
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/bootstrap/css/bootstrap.min.css',
        'global/plugins/uniform/css/uniform.default.css',

        // Theme styles
        'global/css/components-rounded.css',
        'global/css/plugins.css',
        'admin/css/layout.css',
        'admin/css/themes/default.css',
        'admin/css/custom.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        // Core plugins
        'global/plugins/jquery.min.js',
        'global/plugins/jquery-migrate.min.js',
        'global/plugins/jquery-ui/jquery-ui.min.js',
        'global/plugins/bootstrap/js/bootstrap.min.js',
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/jquery.cokie.min.js',
        'global/plugins/uniform/jquery.uniform.min.js',

        // Theme scripts
        'global/scripts/metronic.js',
        'admin/scripts/layout.js',
        'admin/scripts/demo.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'hoksilato\metronic\assets\LtIE9JsAsset',
    ];
}