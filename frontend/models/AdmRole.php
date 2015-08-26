<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adm_role".
 *
 * @property integer $id_role
 * @property string $nama_role
 *
 * @property AdmAkses[] $admAkses
 */
class AdmRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_role'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_role' => 'Id Role',
            'nama_role' => 'Nama Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmAkses()
    {
        return $this->hasMany(AdmAkses::className(), ['id_role' => 'id_role']);
    }
}
