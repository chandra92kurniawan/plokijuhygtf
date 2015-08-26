<?php

namespace frontend\models;


use Yii;

/**
 * This is the model class for table "adm_kelompok".
 *
 * @property integer $id_kelompok
 * @property string $nama_kelompok
 *
 * @property AdmMenu[] $admMenus
 */
class AdmKelompok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_kelompok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kelompok'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kelompok' => 'Id Kelompok',
            'nama_kelompok' => 'Nama Kelompok',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmMenus()
    {
        return $this->hasMany(AdmMenu::className(), ['id_kelompok' => 'id_kelompok']);
    }
}
