<?php

namespace frontend\controllers;
use Yii;
use frontend\models\AdmMenu;
use frontend\models\AdmKelompok;
class HomeController extends \yii\web\Controller
{
    //public $dm='chandra';        
    public function actionIndex()
    {	
    	//echo "Haii";
        return $this->render('index');
    }
    public function actionContent($id){
    	$this->layout = "/template2";
    	$kelompok= AdmKelompok::findOne($id);
    	$models = AdmMenu::find()->where(['sub' => '0','id_kelompok'=>$id])->all();
        Yii::$app->params['icon'] = $kelompok->icon;
        Yii::$app->params['kelompok'] = strtoupper($kelompok->nama_kelompok);
    	return $this->render('page_content', ['data'=>$models,'kelompok'=>$kelompok]);
    	/*foreach($models as $m){
    		echo $m->nama_menu." - ";
    	}*/
    }
    public function actionSub($kl='',$sb=''){
        $this->layout='/template3';
        $kelompok= AdmKelompok::findOne($kl);
        $menu=AdmMenu::find()->where(['sub'=>$sb])->all();
        Yii::$app->params['icon'] = $kelompok->icon;
        Yii::$app->params['kelompok'] = strtoupper($kelompok->nama_kelompok);
        Yii::$app->params['left_side'] = $menu;
        return $this->render('temp3');
    }
}
