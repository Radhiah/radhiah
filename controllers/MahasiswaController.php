<?php

namespace app\controllers;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' ,[
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $Mahasiswa = new Mahasiswa;
        $Mahasiswa->nim = '60200121120';
        $Mahasiswa->nama = 'muiz';
        $Mahasiswa->jurusan = 'TI';
        if ($Mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $Mahasiswa = Mahasiswa::findOne($id);
        $Mahasiswa->nim = '60200121003';
        if ($Mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Mahasiswa = Mahasiswa::findOne($id);
        if ($Mahasiswa->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Mahasiswa->getErrors());
            die();
        }

    }

}
