<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.09.17
 * Time: 2:33
 */

namespace app\modules\admin\controllers;


use yii\web\Controller;

class InstitutesController extends Controller
{
    public function actionIndex(){
       return $this->render('index');
    }
}