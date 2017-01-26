<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "satker".
 *
 * @property integer $kode
 * @property string $satker
 * @property integer $parent
 */
class Satker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'satker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'satker'], 'required'],
            [['kode', 'parent'], 'integer'],
            [['satker'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'satker' => 'Satker',
            'parent' => 'Parent',
        ];
    }
}
