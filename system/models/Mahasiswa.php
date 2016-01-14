<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $id
 * @property string $nama
 * @property string $kata_sandi
 * @property string $nomor_induk_mahasiswa
 * @property string $fakultas_program_studi
 * @property string $tempat_tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'kata_sandi', 'nomor_induk_mahasiswa', 'fakultas_program_studi', 'tempat_tanggal_lahir', 'jenis_kelamin', 'alamat'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'kata_sandi', 'fakultas_program_studi'], 'string', 'max' => 300],
            [['nomor_induk_mahasiswa'], 'string', 'max' => 20],
            [['tempat_tanggal_lahir'], 'string', 'max' => 100],
            [['jenis_kelamin'], 'string', 'max' => 9],
            [['nama'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'kata_sandi' => 'Kata Sandi',
            'nomor_induk_mahasiswa' => 'Nomor Induk Mahasiswa',
            'fakultas_program_studi' => 'Fakultas Program Studi',
            'tempat_tanggal_lahir' => 'Tempat Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
        ];
    }
}
