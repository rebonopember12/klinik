<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $Nama
 * @property string $Jabatan
 * @property string $TanggalLahir
 * @property int $NoTelepon
 * @property string $Alamat
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'Jabatan', 'TanggalLahir', 'NoTelepon', 'Alamat'], 'required'],
            [['TanggalLahir'], 'safe'],
            [['NoTelepon'], 'integer'],
            [['Alamat'], 'string'],
            [['Nama', 'Jabatan'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'Nama' => 'Nama',
            'Jabatan' => 'Jabatan',
            'TanggalLahir' => 'Tanggal Lahir',
            'NoTelepon' => 'No Telepon',
            'Alamat' => 'Alamat',
        ];
    }
}
