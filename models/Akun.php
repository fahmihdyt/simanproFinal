<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akun".
 *
 * @property string $nik
 * @property string $nama
 * @property string $gender
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $alamat
 * @property integer $jabatan
 * @property string $no_telp
 *
 * @property Aktivitas[] $aktivitas
 * @property Jabatan $jabatan0
 * @property Issue[] $issues
 * @property Pengumuman[] $pengumumen
 * @property Projectteam[] $projectteams
 */
class Akun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'akun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nik', 'username', 'password'], 'required'],
            [['jabatan'], 'integer'],
            [['nik'], 'string', 'max' => 12],
            [['nama', 'username', 'no_telp'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 1],
            [['email'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
            [['alamat'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'nama' => 'Nama',
            'gender' => 'Gender',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'alamat' => 'Alamat',
            'jabatan' => 'Jabatan',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAktivitas()
    {
        return $this->hasMany(Aktivitas::className(), ['creator' => 'nik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJabatan0()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'jabatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssues()
    {
        return $this->hasMany(Issue::className(), ['creator' => 'nik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengumumen()
    {
        return $this->hasMany(Pengumuman::className(), ['creator' => 'nik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectteams()
    {
        return $this->hasMany(Projectteam::className(), ['nik' => 'nik']);
    }
}
