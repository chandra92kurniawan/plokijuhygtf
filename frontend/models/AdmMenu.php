<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adm_menu".
 *
 * @property integer $id_menu
 * @property string $nama_menu
 * @property string $gambar
 * @property string $icon
 * @property integer $sub
 * @property string $controller
 * @property string $function
 * @property integer $id_kelompok
 *
 * @property AdmAkses[] $admAkses
 * @property AdmKelompok $idKelompok
 */
class AdmMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub', 'id_kelompok'], 'integer'],
            [['nama_menu', 'icon', 'controller', 'function'], 'string', 'max' => 50],
            [['gambar'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'nama_menu' => 'Nama Menu',
            'gambar' => 'Gambar',
            'icon' => 'Icon',
            'sub' => 'Sub',
            'controller' => 'Controller',
            'function' => 'Function',
            'id_kelompok' => 'Id Kelompok',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmAkses()
    {
        return $this->hasMany(AdmAkses::className(), ['id_menu' => 'id_menu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKelompok()
    {
        return $this->hasOne(AdmKelompok::className(), ['id_kelompok' => 'id_kelompok']);
    }
}
