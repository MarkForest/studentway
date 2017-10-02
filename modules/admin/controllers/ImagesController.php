<?php

namespace app\modules\admin\controllers;
use app\models\ListTeam;
use app\models\Privilege;
use app\models\Team;
use app\modules\admin\models\UploadForm;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\UploadedFile;

class ImagesController extends Controller
{
    public $layout = '/image';

    public function actionIndex($t=null,$id=null){


        $teamImages = Team::find()->all();
        $privilege = Privilege::find()->all();
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $fileName = $model->upload();
            if ($fileName) {

                if ($t=='team'){
                    $listTeam = ListTeam::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'images/'.$listTeam->image;
                    $listTeam->image = $fileName;
                    if ($listTeam->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);

                        $teamImages = Team::find()->all();
                        $privilege = Privilege::find()->all();
                        $model = new UploadForm();
                        return $this->render('index',[
                            'teamImages'=>$teamImages,
                            'model'=>$model,
                            'privilege'=>$privilege,
                        ]);
                    }
                }

                if ($t=='privilege'){
                    $privilegeImage = Privilege::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'images/'.$privilegeImage->image;
                    $privilegeImage->image = $fileName;
                    if ($privilegeImage->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $teamImages = Team::find()->all();
                        $privilege = Privilege::find()->all();
                        $model = new UploadForm();
                        return $this->render('index',[
                            'teamImages'=>$teamImages,
                            'model'=>$model,
                            'privilege'=>$privilege,
                        ]);
                    }
                }
            }
        }


        return $this->render('index',[
            'teamImages'=>$teamImages,
            'model'=>$model,
            'privilege'=>$privilege,
        ]);
    }
}