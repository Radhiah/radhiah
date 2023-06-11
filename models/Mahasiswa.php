<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa028".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $jurusan
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
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
            [['nim', 'nama', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 15],
            [['nama'], 'string', 'max' => 50],
            [['jurusan'], 'string', 'max' => 255],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
        ];
    }
}
