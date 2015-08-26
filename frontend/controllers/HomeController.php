<?php

namespace frontend\controllers;
use Yii;
use frontend\models\AdmMenu;
use frontend\models\AdmKelompok;
class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {	
    	//echo "Haii";
        return $this->render('index');
    }
    public function actionContent($id){
    	$this->layout = "/template2";
    	$kelompok= AdmKelompok::findOne($id);
    	$models = AdmMenu::find()->where(['sub' => '0','id_kelompok'=>$id])->all();
    	return $this->render('page_content', ['data'=>$models,'kelompok'=>$kelompok]);
    	/*foreach($models as $m){
    		echo $m->nama_menu." - ";
    	}*/
    }
}
