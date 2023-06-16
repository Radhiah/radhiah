<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    const A = 'Kelas A';
    const B = 'KELAS B';
    const C = 'kelas C';
    const D = 'Kelas D';

    const KELAS = [
        self::A => 'Kelas A',
        self::B => 'Kelas B',
        self::C => 'Kelas C',
        self::D => 'Kelas D',

    ];

    const LULUS = 1;
    const GAGAL = 0;    

    const STATUS = [
        '1' => 'LULUS',
        '0' => 'GAGAL',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa028';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas','status'], 'required'],
            [['nim', 'kelas'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 255],
            [['kelas'], 'in', 'range' => [self::A, self::B, self::C, self::D]],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'No. Induk Mahasiswa',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'status' => 'Status',
        ];
    }
}