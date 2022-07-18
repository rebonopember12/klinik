<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property int $id_wilayah
 * @property string $kota
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $alamat
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kota', 'kecamatan', 'kabupaten', 'alamat'], 'required'],
            [['alamat'], 'string'],
            [['kota', 'kecamatan', 'kabupaten'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'kota' => 'Kota',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'alamat' => 'Alamat',
        ];
    }
}
