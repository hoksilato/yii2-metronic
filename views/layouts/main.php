<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

hoksilato\metronic\assets\MetronicAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@hoksilato/yii2-metronic/assets/static');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>">
<!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="<?= Yii::$app->name ?>" name="description"/>
    <meta content="Baobao Digital" name="author"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name . ' - ' . $this->title) ?></title>
    <link rel="shortcut icon" href="<?= $directoryAsset ?>/favicon.ico"/>
    <?php $this->head() ?>
</head>
<body class="skin-blue sidebar-mini">
    <?php $this->beginBody() ?>

    <?= $this->render(
        'header.php',
        ['directoryAsset' => $directoryAsset]
    ) ?>

    <?= $this->render(
        'content.php',
        ['content' => $content, 'directoryAsset' => $directoryAsset]
    ) ?>

    <?= $this->render(
        'footer.php',
        ['directoryAsset' => $directoryAsset]
    ) ?>

    <?php $this->endBody() ?>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Demo.init(); // init demo features
        });
    </script>
</body>
</html>
<?php $this->endPage() ?>