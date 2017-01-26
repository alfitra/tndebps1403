<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dasar".
 *
 * @property integer $id
 * @property string $jenis
 * @property string $nomor
 * @property string $tanggal
 * @property string $perihal
 * @property string $isi
 */
class Dasar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dasar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis', 'nomor', 'perihal', 'isi'], 'required'],
            [['tanggal'], 'safe'],
            [['isi'], 'string'],
            [['jenis', 'nomor'], 'string', 'max' => 100],
            [['perihal'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis' => 'Jenis',
            'nomor' => 'Nomor',
            'tanggal' => 'Tanggal',
            'perihal' => 'Perihal',
            'isi' => 'Isi',
        ];
    }
}
