<?php

namespace app\controllers;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;
use Yii;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->id_mhs_003 = 101;
        $mahasiswa->nim_003 = '60200121003-101';
        $mahasiswa->nama_003 = 'Rafiul Muiz.K';
        $mahasiswa->kelas_003 = 'D';
        $mahasiswa->status_003 = 'Baru';
        if ($mahasiswa->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $mahasiswa = Mahasiswa::findOne($id);
        if ($mahasiswa !== null) {
            $mahasiswa->id_mhs_003 = 102;
            $mahasiswa->nim_003 = '60200121015-102';
            $mahasiswa->nama_003 = 'Rahmat Fajri Ishar';
            $mahasiswa->status_003 = 'Update';
            $mahasiswa->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
            
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }
    }

    public function actionDelete($id)
    {
        $mahasiswa = Mahasiswa::findOne($id);
        if ($mahasiswa->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }
    }

    public function actionView($id)
    {
        $mahasiswa = Mahasiswa::findOne($id);

        return $this-> render('view', [
            'model' => $mahasiswa,
        ]);
    }

}
