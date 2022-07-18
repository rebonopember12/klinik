<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $namapasien
 * @property string $alamat
 * @property string $notelepon
 * @property string $tanggallahir
 * @property string $tanggalmasuk
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namapasien', 'alamat', 'notelepon', 'tanggallahir', 'tanggalmasuk'], 'required'],
            [['alamat'], 'string'],
            [['tanggallahir', 'tanggalmasuk'], 'safe'],
            [['namapasien'], 'string', 'max' => 60],
            [['notelepon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'namapasien' => 'Nama Pasien',
            'alamat' => 'Alamat',
            'notelepon' => 'No Telepon',
            'tanggallahir' => 'Tanggal Lahir',
            'tanggalmasuk' => 'Tanggal Masuk',
        ];
    }
}
