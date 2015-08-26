<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use yii\helpers\Url;
//use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage('@app/views/layouts/main.php') ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php $this->registerCssFile("metro/style_b.css");?>
<div id="loadmdl" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="margin-top: 10%;">
  <div class="modal-dialog modal-sm">
    <div style="background: url('<?= Yii::$app->request->baseUrl;?>/metro/logotasik.png') no-repeat; background-size: 40%;">
        <img src="<?= Yii::$app->request->baseUrl;?>/metro/loading.gif"/>
    </div>
  </div>
</div>
<div class="main container" style="padding-top: 20px;">
    <div class="thumb-header">
        <div class="row">
            <div class="col-md-2">
                <img src="<?= Yii::$app->request->baseUrl;?>/metro/logotasik.png" style="width: 100%;"/>
            </div>
            <div class="col-md-10">
                <h3 class="header_jdulb text-center">SISTEM INFORMASI PENGELOLAAN SUMBER DAYA AIR (SIPSDA)</h3>
                <h5 class="text-center header_jdulb">DINAS PU BINA MARGA DAN PENGAIRAN KABUPATEN TASIKMALAYA</h5>
                <hr style="margin-top: 0;"/>
                <!--<h3 class="header_jdulb"><span class="mif-water"></span> SUMBER DAYA AIR</h3>-->
            </div>
        </div>
    </div>
    <div class="container container-menu" style="min-height: 320px;">
        <?php echo $content;?>
    </div>
    
    <div class="container" style="width: 100%; margin-top: 20px;">
        <div class="row">
        <div class="col-md-2">
            <div class="text-center">
                <a class="mn" title="Bidang Energi" href="<?php echo Url::to(array('home/content','id'=>'1'));?>"><span class="mif-water fg-blue mif-3x"></span></a>
                <p class="title-mn">Sumber Daya Air</p>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <div class="text-center">
                <a class="mn" href="<?php echo Url::to(array('home/index'));?>"><span class="mif-home fg-white mif-3x"></span></a>
                <p class="title-mn">Home</p>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <div class="p text-center" style="margin-left: 50px;">
                <a class="mn" href="<?php echo Url::to(array('home/content','id'=>'2'));?>" title="Irigasi"><span class="mif-cloud fg-blue mif-3x"></span></a>
                <p class="title-mn">Irigasi</p>
            </div>
        </div>
        
    </div>
    </div>
    
</div>
<?php $this->endBody() ?>
</body>
</html>
	
<?php $this->endPage() ?>