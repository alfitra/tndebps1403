<?php

namespace app\controllers;

use Yii;
use app\models\Pegawai;
use app\models\PegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PegawaiController implements the CRUD actions for Pegawai model.
 */
class PegawaiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pegawai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pegawai model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pegawai();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Data Pegawai Berhasil Ditambah!');
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', 'Data Pegawai Gagal Ditambah!');
                return $this->refresh();
            }
//                return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Data Pegawai Berhasil Diupdate!');
                return $this->redirect(['index']);
//                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->session->setFlash('error', 'Data Pegawai Gagal Diupdate');
                return $this->refresh();
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pegawai::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
      public function getGolongan($id) {
        $model = new Pegawai;
        $pangkatGolongans = $model->getPangkatGolongan();
        $golongan = "";
        foreach ($pangkatGolongans as $pangkatGolongan) {
            if ($pangkatGolongan['id'] == $id) {
                $golongan = $pangkatGolongan['golongan'];
            }
        }
//        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $golongan;
    }
}
