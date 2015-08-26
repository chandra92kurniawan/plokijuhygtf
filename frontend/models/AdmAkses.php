<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adm_akses".
 *
 * @property integer $id_akses
 * @property integer $id_role
 * @property integer $id_menu
 * @property integer $status
 * @property integer $posisi
 *
 * @property AdmRole $idRole
 * @property AdmMenu $idMenu
 */
class AdmAkses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_akses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_role', 'id_menu', 'status', 'posisi'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_akses' => 'Id Akses',
            'id_role' => 'Id Role',
            'id_menu' => 'Id Menu',
            'status' => 'Status',
            'posisi' => 'Posisi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRole()
    {
        return $this->hasOne(AdmRole::className(), ['id_role' => 'id_role']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMenu()
    {
        return $this->hasOne(AdmMenu::className(), ['id_menu' => 'id_menu']);
    }
}
