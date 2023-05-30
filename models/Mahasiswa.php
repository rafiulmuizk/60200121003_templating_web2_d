<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id_003
 * @property int $id_mhs_003
 * @property string $nim_003
 * @property string $nama_003
 * @property string $kelas_003
 * @property string $status_003
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mhs_003', 'nim_003', 'nama_003', 'kelas_003', 'status_003'], 'required'],
            [['id_mhs_003'], 'integer'],
            [['nim_003', 'nama_003', 'kelas_003', 'status_003'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mhs_003' => 'ID',
            'nim_003' => 'No. Induk Mahasiswa',
            'nama_003' => 'Nama Mahasiswa',
            'kelas_003' => 'Kelas',
            'status_003' => 'Status',
        ];
    }
}
