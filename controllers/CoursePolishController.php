<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 12.07.17
 * Time: 18:32
 */

namespace app\controllers;


use yii\web\Controller;

class CoursePolishController extends Controller
{
    public $layout = "courses";

    public function actionIndex()
    {
        return $this->render('index');
    }

}