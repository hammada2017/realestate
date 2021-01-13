<?php

namespace backend\controllers;

use Yii;
use common\models\RealEstate;
use common\models\RealEstateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * RealEstateController implements the CRUD actions for RealEstate model.
 */
class RealEstateController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all RealEstate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RealEstateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RealEstate model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RealEstate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RealEstate();

        if ($model->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($model, 'photo');
            $uplouded = md5($file->baseName.time()). '.' . $file->extension;
            $fileName = $model->upload_folder.'/'.$uplouded;
            if($file !== null){
                $file->saveAs($fileName);
                $model->realestate_image = $uplouded;
             }else{
                $model->realestate_image = '47baa494af29df10ddbf3efbacbc93ef.png';
             }
             $model->user_id = Yii::$app->user->id;
            $model->save();
        
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RealEstate model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($model, 'photo');
            $uplouded = md5($file->baseName.time()). '.' . $file->extension;
            $fileName = $model->upload_folder.'/'.$uplouded;
            if($file !== null){
                $file->saveAs($fileName);
                $model->realestate_image = $uplouded;
             }else{
                $model->realestate_image = '47baa494af29df10ddbf3efbacbc93ef.png';
             }
             $model->user_id = Yii::$app->user->id;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RealEstate model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RealEstate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RealEstate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RealEstate::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
