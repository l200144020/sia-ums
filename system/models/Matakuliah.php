<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matakuliah".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $semester
 * @property integer $dosen_id
 * @property integer $kelas_id
 * @property integer $ruang_id
 * @property string $jam
 *
 * @property Ruang $ruang
 * @property Dosen $dosen
 * @property Kelas $kelas
 */
class Matakuliah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matakuliah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'semester', 'dosen_id', 'kelas_id', 'ruang_id', 'jam'], 'required'],
            [['semester', 'dosen_id', 'kelas_id', 'ruang_id'], 'integer'],
            [['nama'], 'string', 'max' => 300],
            [['jam'], 'string', 'max' => 10],
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
            'semester' => 'Semester',
            'dosen.nama' => 'Dosen',
            'kelas.nama' => 'Kelas',
            'ruang.nama' => 'Ruang',
            'jam' => 'Jam',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRuang()
    {
        return $this->hasOne(Ruang::className(), ['id' => 'ruang_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Dosen::className(), ['id' => 'dosen_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id' => 'kelas_id']);
    }
}
