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
        $model = new mahasiswa;
        if ($model->load($this->request->post())){
            if ($model->save()) {
                return $this->redirect([
                    'view',
                    'id' => $model->id
                ]);
            }
        }
        else {
           $model->loadDefaultValues();
        }
        return $this->render('create', [
            'model' => $model
        ]);

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

    public function actionView($id)
    {
        $mahasiswa =  Mahasiswa::findOne($id);
        if ($mahasiswa !== null) {
         return $this->render('view', ['model' => $mahasiswa]);
        }
    }

}
