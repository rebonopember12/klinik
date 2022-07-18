<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $NamaTindakan
 * @property string $JenisTindakan
 * @property string $Tanggal
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NamaTindakan', 'JenisTindakan', 'Tanggal'], 'required'],
            [['Tanggal'], 'safe'],
            [['NamaTindakan', 'JenisTindakan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'NamaTindakan' => 'Nama Tindakan',
            'JenisTindakan' => 'Jenis Tindakan',
            'Tanggal' => 'Tanggal',
        ];
    }
}
