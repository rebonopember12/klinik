<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $NamaObat
 * @property string $JenisObat
 * @property int $Stock
 * @property int $Harga
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NamaObat', 'JenisObat', 'Stock', 'Harga'], 'required'],
            [['Stock', 'Harga'], 'integer'],
            [['NamaObat', 'JenisObat'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'NamaObat' => 'Nama Obat',
            'JenisObat' => 'Jenis Obat',
            'Stock' => 'Stock',
            'Harga' => 'Harga',
        ];
    }
}
