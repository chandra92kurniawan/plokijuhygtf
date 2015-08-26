<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
//<?=Yii::$app->urlManagerFrontEnd->createUrl('index.php?r=sub/index');
?>
<?php $this->beginPage('@app/views/layouts/main.php') ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <!--<title><?= Html::encode($this->title) ?></title>-->
    <title>SIPSDA</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php $this->registerCssFile("metro/style_a.css");?>

<div id="loadmdl" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="margin-top: 10%;">
  <div class="modal-dialog modal-sm">
    <div style="background: url('<?= Yii::$app->request->baseUrl;?>/metro/logotasik.png') no-repeat; background-size: 40%;">
        <img src="<?= Yii::$app->request->baseUrl;?>/metro/loading.gif"/>
    </div>
  </div>
</div>
<div class="presenter" data-role="presenter" data-height="40%" data-easing="swing" style="width: 100%;">
    <div class="scene" style="">
        <div class="act bg-biru fg-black" style="display: none;">
             <div class="actor" data-position="10,100">
                    <h4 class="header_jdul" style="color: white;"><span class="mif-water mif-3x" style="color: lightblue;"></span> IRIGASI</h4>
                    
                </div>
             <div class="tile-group" style="left: 0px;">
                
                <div class="tile-container">
                    <div class="actor" data-position="50,10">
                        <div class="tile bg-teal fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content">
                                <img src="<?= Yii::$app->request->baseUrl;?>/metro/pdam-malang.jpg" style="width: 100%;" height="100%"/>
                            </div>
                            <span class="tile-label"><span class="mif-cog"></span> Peraturan</span>
                        </div>
                    </div>
                    <div class="actor" data-position="50,170">
                        <div class="tile bg-darkGreen fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <span class="icon mif-shopping-basket"></span>
                            </div>
                            <span class="tile-label">SDAT</span>
                        </div>
                    </div>
                    <div class="actor" data-position="50,330">
                        <div class="tile bg-cyan fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <span class="icon mif-skype"></span>
                            </div>
                            <div class="tile-label">Kegiatan</div>
                        </div>
                    </div>
                    <div class="actor" data-position="50,490">
                        <div class="tile bg-darkBlue fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <span class="icon mif-cloud"></span>
                            </div>
                            <span class="tile-label">Teknis</span>
                        </div>
                    </div>
                    
                    <div class="actor" data-position="50,650">
                        <div class="tile bg-darkBlue fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <span class="icon mif-cloud"></span>
                            </div>
                            <span class="tile-label">Statistik Air Tanah</span>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <div class="act bg-ijo fg-black" style="display: none;">
            <div class="actor" data-position="10,100">
                <h4 class="header_jdul" style="color: whitesmoke;"><span class="mif-cloud mif-3x" style="color: lightgreen;"></span> SUMBER DAYA AIR</h4>
                
            </div>
            <div class="tile-group" style="left: 0px;">
                
                <div class="tile-container">
                    <div class="actor" data-position="50,10">
                        <div class="tile" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content">
                                <img src="<?= Yii::$app->request->baseUrl;?>/metro/pdam-malang.jpg" style="width: 100%;" height="100%"/>
                            </div>
                            <span class="tile-label"><span class="mif-cog"></span> Peraturan</span>
                        </div>
                    </div>
                    <div class="actor" data-position="50,170">
                        <div class="tile bg-darkGreen fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <span class="icon mif-shopping-basket"></span>
                            </div>
                            <span class="tile-label">Inventarisasi Data Irigasi</span>
                        </div>
                    </div>
                    <div class="actor" data-position="50,330">
                        <div class="tile bg-cyan fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <img src="<?= Yii::$app->request->baseUrl;?>/metro/pdam-malang.jpg" style="width: 100%;" height="100%"/>
                            </div>
                            <div class="tile-label">Pembangunan Irigasi</div>
                        </div>
                    </div>
                    <div class="actor" data-position="50,490">
                        <div class="tile bg-darkBlue fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <span class="icon mif-cloud"></span>
                            </div>
                            <span class="tile-label">Teknis</span>
                        </div>
                    </div>
                    <div class="actor" data-position="50,650">
                        <div class="tile bg-cyan fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                            <div class="tile-content iconic">
                                <span class="icon mif-skype"></span>
                            </div>
                            <div class="tile-label">Statistik Irigasi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height: 5%;">
<h3 class="header_jdul text-center">SISTEM INFORMASI PENGELOLAAN SUMBER DAYA AIR (SIPSDA) </h3>
</div>
<div class="container" style="height: 15%;background: black; width: 100%;">
    <div class="row">
        <div class="col-md-4">
            <div class="text-center">
                <!--<a class="mn" title="Bidang Energi" href="<?=Yii::$app->urlManagerFrontEnd->createUrl('site/contact');?>"><span class="mif-water fg-blue mif-4x"></span></a>-->
                <a class="mn" title="Bidang Energi" href="<?php echo Url::to(array('home/content','id'=>'1'));?>"><span class="mif-water fg-blue mif-4x"></span></a>
                <p style="font-weight: bolder; color: wheat; font-size: 15px;" class="title-mn">Sumber Daya Air</p>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="text-center">
                <a class="mn" href="<?php echo Url::to(array('home/index'));?>"><span class="mif-home fg-white mif-4x"></span></a>
                <p style="font-weight: bolder; color: wheat; font-size: 15px;" class="title-mn">Home</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p text-center">
                <a class="mn" href="<?php echo Url::to(array('home/content','id'=>'2'));?>" title="Irigasi"><span class="mif-cloud fg-blue mif-4x"></span></a>
                <p style="font-weight: bolder; color: wheat; font-size: 15px;" class="title-mn">Irigasi</p>
            </div>
        </div>
        
    </div>
</div>
<div class="container" style="width: 100%; margin-top: 5px;">
    <div class="row">
        <div class="col-md-4">
            <div class="cell">
                <div class="image-container bordered" style="width: 100%; outline: lightgreen 1px solid;">
                    <div class="frame" >
                        <img src="<?= Yii::$app->request->baseUrl;?>/metro/waterfall.jpg" style="max-height: 200px;"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="logotasik" style="margin-top: 10px;">
                <img src="<?= Yii::$app->request->baseUrl;?>/metro/logotasik.png" style="margin-left: 30%; width: 40%; height:180px;"/>
            </div>
            <div class="text-center">
                <p>DINAS PU BINA MARGA DAN PENGAIRAN</p>
                <p><b>KABUPATEN TASIKMALAYA</b></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cell">
                <div class="image-container bordered" style="width: 100%; outline: lightblue 1px solid;">
                    <div class="frame" >
                        <img src="<?= Yii::$app->request->baseUrl;?>/metro/sawaah.jpg" style="max-height: 200px;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
	<script>
	    $(window).load(function() { 
	         $('body').addClass('animated slideInDown');
	    });
	    $(function(){
	        
	        //$(document.body).append('<div id="page-loader">Loading...</div>');
	        $(window).on("beforeunload", function(){
	            //$('#page-loader').fadeIn(1000).delay(10000).fadeOut(1000);
	            $('#loadmdl').modal('show');
	        });
	    });
    </script>
<?php $this->endPage() ?>