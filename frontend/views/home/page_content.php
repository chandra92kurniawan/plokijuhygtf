<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
//use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;

//$this->icon = 'mif-water';
//$this->judul="SUMBER DAYA AIR";
//$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="row"><div class="col-md-2"></div><div class="col-md-10"><h3 class="header_jdulb"><span class="<?php echo $kelompok->icon;?>"></span> <?php echo strtoupper($kelompok->nama_kelompok);?></h3></div> </div>-->
        <div class="row">
            <?php foreach($data as $val){?>
            <div class="col-md-2">
                <a href="<?php echo Url::to(array('home/sub','kl'=>$kelompok->id_kelompok,'sb'=>$val->id_menu));?>" class="tile bg-teal fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content">
                        <img src="<?= Yii::$app->request->baseUrl;?>/uploads/menu/<?php echo $val->gambar;?>" style="width: 100%;" height="100%"/>
                    </div>
                    <span class="tile-label"><!--<span class="mif-cog"></span>--> <?php echo $val->nama_menu;?></span>
                </a>
            </div>
            <?php }?>
            <!--
            <div class="col-md-2">
                <a href="sda_berita.htm" class="tile bg-teal fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content">
                        <img src="<?= Yii::$app->request->baseUrl;?>/metro/pdam-malang.jpg" style="width: 100%;" height="100%"/>
                    </div>
                    <span class="tile-label"><span class="mif-cog"></span> Peraturan</span>
                </a>
            </div>
            <div class="col-md-2">
                <a id="a_peraturan" href="#" class="tile bg-darkGreen fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon mif-shopping-basket"></span>
                    </div>
                    <span class="tile-label">Inventarisasi Data Irigasi</span>
                </a>
            </div>
            <div class="col-md-2">
                <div class="tile bg-cyan fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <img src="<?= Yii::$app->request->baseUrl;?>/metro/pdam-malang.jpg" style="width: 100%;" height="100%"/>
                    </div>
                    <div class="tile-label">Pembangunan Irigasi</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="tile bg-darkBlue fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon mif-cloud"></span>
                    </div>
                    <span class="tile-label">Teknis</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="tile bg-cyan fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon mif-skype"></span>
                    </div>
                    <div class="tile-label">Statistik Irigasi</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="tile bg-cyan fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon mif-skype"></span>
                    </div>
                    <div class="tile-label">Statistik Irigasi</div>
                </div>
            </div>  -->          
        </div>
