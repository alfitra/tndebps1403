<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property integer $id
 * @property string $nama
 * @property string $nip_lama
 * @property string $nip
 * @property string $jabatan
 * @property string $pangkat
 * @property string $golongan
 * @property string $tmt_golongan
 * @property string $pendidikan
 * @property string $tgl_lulus
 * @property integer $jenis_kelamin
 * @property string $tgl_lahir
 * @property string $email
 */
class Pegawai extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['nama', 'nip_lama', 'nip', 'jabatan', 'pangkat', 'golongan', 'pendidikan', 'jenis_kelamin', 'tgl_lahir', 'email'], 'required'],
                [['tmt_golongan', 'tgl_lulus', 'tgl_lahir'], 'safe'],
                [['jenis_kelamin'], 'integer'],
                [['nama', 'pangkat', 'email'], 'string', 'max' => 50],
                [['nip_lama'], 'string', 'max' => 9],
                [['nip'], 'string', 'max' => 17],
                [['jabatan', 'pendidikan'], 'string', 'max' => 255],
                [['golongan'], 'string', 'max' => 5],
                [['email'], 'unique'],
                [['nip_lama'], 'unique'],
                [['nip'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nip_lama' => 'NIP Lama',
            'nip' => 'NIP',
            'jabatan' => 'Jabatan',
            'pangkat' => 'Pangkat',
            'golongan' => 'Golongan',
            'tmt_golongan' => 'TMT Golongan',
            'pendidikan' => 'Pendidikan',
            'tgl_lulus' => 'Tanggal Lulus',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tgl_lahir' => 'Tanggal Lahir',
            'email' => 'e-mail',
        ];
    }

    public function getPangkatGolongan() {
        $pangkatGolongan = [
                ['id' => '1', 'pangkat' => 'Pembina Utama', 'golongan' => 'IV/e'],
                ['id' => '2', 'pangkat' => 'Pembina Utama Madya', 'golongan' => 'IV/d'],
                ['id' => '3', 'pangkat' => 'Pembina Utama Muda', 'golongan' => 'IV/c'],
                ['id' => '4', 'pangkat' => 'Pembina Tingkat I', 'golongan' => 'IV/b'],
                ['id' => '5', 'pangkat' => 'Pembina', 'golongan' => 'IV/a'],
                ['id' => '6', 'pangkat' => 'Penata Tingkat I', 'golongan' => 'III/d'],
                ['id' => '7', 'pangkat' => 'Penata', 'golongan' => 'III/c'],
                ['id' => '8', 'pangkat' => 'Penata Muda Tingkat I', 'golongan' => 'III/b'],
                ['id' => '9', 'pangkat' => 'Penata Muda', 'golongan' => 'III/a'],
                ['id' => '10', 'pangkat' => 'Pengatur Tingkat I', 'golongan' => 'II/d'],
                ['id' => '11', 'pangkat' => 'Pengatur', 'golongan' => 'II/c'],
                ['id' => '12', 'pangkat' => 'Pengatur Muda Tingkat I', 'golongan' => 'II/b'],
                ['id' => '13', 'pangkat' => 'Pengatur Muda', 'golongan' => 'II/a'],
                ['id' => '14', 'pangkat' => 'Juru Tingkat I', 'golongan' => 'I/d'],
                ['id' => '15', 'pangkat' => 'Juru', 'golongan' => 'I/c'],
                ['id' => '16', 'pangkat' => 'Juru Muda Tingkat I', 'golongan' => 'I/b'],
                ['id' => '17', 'pangkat' => 'Juru Muda', 'golongan' => 'I/a'],
        ];
        return $pangkatGolongan;
    }

  

}
