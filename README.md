Metronic - Admin Dashboard Template for the Yii framework
=========================================================

*Backend UI for Yii2 Framework, based on [Metronic - Admin Dashboard Template](http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469)*

This package contains an [Asset Bundle for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html)
which registers the CSS files for the Metronic user-interface.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist hoksilato/yii2-metronic "*"
```

or add

```
"hoksilato/yii2-metronic": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you can have a **preview** by reconfiguring the path mappings of the view component:

For Yii 2 [Application Template](https://github.com/yiisoft/yii2-app-advanced) or [Basic Application Template](https://github.com/yiisoft/yii2-app-basic)

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/hoksilato/yii2-metronic/views'
             ],
         ],
    ],
],
```

This asset bundle provides sample files for layout and view, they are **not meant to be customized directly in the `vendor/` folder**.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.


Customization
-------------

- Copy files from `vendor/hoksilato/yii2-metronic/views` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.