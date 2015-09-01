<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
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
    <script>
    $(function(){
        //$(document.body).append('<div id="page-loader">Loading...</div>');
        $(window).on("beforeunload", function(){
            //$('#page-loader').fadeIn(1000).delay(10000).fadeOut(1000);
            $('#loadmdl').modal('show');
        });
    });
    $(function(){
        $(".panel").panel();
        //$('.tile-group-title').slideDown();
        //$(".jdl-tile").animate({top: '19%'});
        $(".jdl-tile").fadeIn(1000,function(){
            $(".jdl-tile").animate({top: '19%'});
        });
        //$(".jdl-tile").animate({top: '19%'});
        //$(".tile-container").animate({left: '30%'});
    });
    </script>
</head>
<body>
<?php $this->beginBody() ?>
<pre><?php //print_r(Yii::$app->params['left_side'])?> </pre>
<div id="loadmdl" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="margin-top: 10%;">
  <div class="modal-dialog modal-sm">
    <div style="background: url('<?= Yii::$app->request->baseUrl;?>/metro/logotasik.png') no-repeat; background-size: 40%;">
        <img src="loading.gif"/>
    </div>
  </div>
</div>
<div class="main container" style="width: 100%; min-height: 80%;">
    <div class="container" style="padding-top: 20px;">
        <div class="thumb-header">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?= Yii::$app->request->baseUrl;?>/metro/logotasik.png" style="width: 100%;"/>
                </div>
                <div class="col-md-10">
                    <h3 class="header_jdul text-center">SISTEM INFORMASI PENGELOLAAN SUMBER DAYA AIR (SIPSDA)</h3>
                    <h5 class="text-center">DINAS PU BINA MARGA DAN PENGAIRAN KABUPATEN TASIKMALAYA</h5>
                    <hr style="margin-top: 0;"/>
                    <h3 style="color: black;"><span class="<?=Yii::$app->params['icon'];?>"></span> <?=Yii::$app->params['kelompok'];?></h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-1">
                <a href="index.htm" data-placement="left" title="Home" class="ttip mn tile-small bg-blue" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon fg-white mif-home"></span>
                    </div>
                </a>
                
                <a href="sda.htm" data-placement="left" title="Berita" class="ttip mn tile-small bg-blue" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon fg-white mif-water"></span>
                    </div>
                </a>
                <?php foreach(Yii::$app->params['left_side'] as $data){?>
                <a href="<?php echo Url::to(array('home/viewsub','id'=>$data->id_menu));?>" title="<?php echo $data->nama_menu;?>" class="ttip mn tile-small bg-green" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon fg-white mif-earth"></span>
                    </div>
                </a>    
                    
                <?php }?>
                <!--<a href="sda_map.htm" class="mn tile-small bg-green" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon fg-white mif-earth"></span>
                    </div>
                </a>
                <a href="sda_video.htm" class="mn tile-small bg-darkViolet" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s;">
                    <div class="tile-content iconic">
                        <span class="icon fg-white mif-video-camera"></span>
                    </div>
                </a>-->
            </div>
            <div class="col-md-11">
                <div class="panel">
                    <div class="heading">
                        <span class="icon fg-white mif-water"></span>
                        <span class="title">Berita</span>
                    </div>
                    <div class="content">
                        <div class="thumbnail" style="border-radius: 0;">
                            <h3>Tentang Kabupaten Tasik</h3>
                            <hr style="margin: 0 0 5px 0;"/>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="logotasik.png" class="thumbnail" style="width: 100%;"/>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                    Kabupaten Tasikmalaya, adalah sebuah kabupaten di Provinsi Jawa Barat, Indonesia. Ibukotanya terletak di kecamatan Singaparna. Kabupaten ini berbatasan dengan Kabupaten Majalengka dan Kota Tasikmalaya di utara, Samudera Hindia di selatan, Kabupaten Ciamis dan Kabupaten Pangandaran di timur, dan Kabupaten Garut di barat. Terletak di tenggara daerah Priangan, Kabupaten Tasikmalaya sejauh ini dinilai sebagai kabupaten paling besar dan berperan penting di wilayah Priangan Timur. 
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><span class="icon fg-black mif-users"></span>Admin, <span class="icon fg-black mif-calendar"></span> 1 Januari 2000</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right"><a href="#">Selanjutnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail" style="border-radius: 0;">
                            <h3>Tentang Kabupaten Tasik</h3>
                            <hr style="margin: 0 0 5px 0;"/>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="logotasik.png" class="thumbnail" style="width: 100%;"/>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                    Kabupaten Tasikmalaya, adalah sebuah kabupaten di Provinsi Jawa Barat, Indonesia. Ibukotanya terletak di kecamatan Singaparna. Kabupaten ini berbatasan dengan Kabupaten Majalengka dan Kota Tasikmalaya di utara, Samudera Hindia di selatan, Kabupaten Ciamis dan Kabupaten Pangandaran di timur, dan Kabupaten Garut di barat. Terletak di tenggara daerah Priangan, Kabupaten Tasikmalaya sejauh ini dinilai sebagai kabupaten paling besar dan berperan penting di wilayah Priangan Timur. 
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><span class="icon fg-black mif-users"></span>Admin, <span class="icon fg-black mif-calendar"></span> 1 Januari 2000</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right"><a href="#">Selanjutnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail" style="border-radius: 0;">
                            <h3>Tentang Kabupaten Tasik</h3>
                            <hr style="margin: 0 0 5px 0;"/>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="logotasik.png" class="thumbnail" style="width: 100%;"/>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                    Kabupaten Tasikmalaya, adalah sebuah kabupaten di Provinsi Jawa Barat, Indonesia. Ibukotanya terletak di kecamatan Singaparna. Kabupaten ini berbatasan dengan Kabupaten Majalengka dan Kota Tasikmalaya di utara, Samudera Hindia di selatan, Kabupaten Ciamis dan Kabupaten Pangandaran di timur, dan Kabupaten Garut di barat. Terletak di tenggara daerah Priangan, Kabupaten Tasikmalaya sejauh ini dinilai sebagai kabupaten paling besar dan berperan penting di wilayah Priangan Timur. 
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><span class="icon fg-black mif-users"></span>Admin, <span class="icon fg-black mif-calendar"></span> 1 Januari 2000</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right"><a href="#">Selanjutnya</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav>
                          <ul class="pager">
                            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                            <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>            
    </div>
</div>
<footer class="container navbar-inverse" style="width: 100%; margin-top: 5%; border-radius: 0;padding-top: 10px;">
    <div class="text-center">
        <p>
        <a href="index.htm">Home</a> | <a href="sda.htm">Sumber Daya Air</a> | <a href="irigasi.htm">Irigasi</a>
        </p>
        <p>&copy; Copyright 2015</p>
        <p>Dinas PU Bina Marga dan Pengairan Kabupaten Tasikmalaya</p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
<script type="text/javascript">
    $(function () {
      $('.ttip').tooltip()
    })
</script>
</html>
	
<?php $this->endPage() ?>