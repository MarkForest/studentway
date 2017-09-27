<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.09.17
 * Time: 2:28
 */

namespace app\modules\admin\controllers;


use app\models\Assurance;
use app\models\Footer;
use app\models\GettingFifth;
use app\models\GettingFirst;
use app\models\GettingFourth;
use app\models\GettingSecond;
use app\models\GettingThird;
use app\models\Home;
use app\models\ListAssurance;
use app\models\ListGettingThird;
use app\models\ListHome;
use app\models\ListListQuestion;
use app\models\ListListTariffs;
use app\models\ListModalQuestion;
use app\models\ListPrivilege;
use app\models\ListQuestion;
use app\models\ListServices;
use app\models\ListTariffs;
use app\models\ListTeam;
use app\models\Partners;
use app\models\Privilege;
use app\models\Question;
use app\models\Services;
use app\models\Tariffs;
use app\models\Team;
use Yii;
use yii\web\Controller;

class CoursePolishController extends Controller
{
    public function actionIndex($reg = 'dp'){


        if($reg=='dp')$drop = 'Дніпро (UK)';
        if($reg=='ky')$drop = 'Київ (UK)';
        if($reg=='kh')$drop = 'Харьків (UK)';
        if($reg=='vn')$drop = 'Вінниця (UK)';
        if($reg=='kv')$drop = 'Кропівницький (UK)';
        if($reg=='km')$drop = 'Кременчуг (UK)';
        if($reg=='iz')$drop = 'Ізмаил (UK)';
        if($reg=='od')$drop = 'Одесса (UK)';
        if($reg=='bc')$drop = 'Біла Церква (UK)';
        if($reg=='sl')$drop = 'Cлов\'янськ (UK)';



        //шапка сайта Home
        $home = Home::findOne(['region_key'=>$reg]);
        $listHome = ListHome::find()->where(['home_id'=>$home->id])->all();

        //Привелегии
        $privilege = Privilege::findOne(['region_key'=>$reg]);
        $listPrivilege = ListPrivilege::find()->where(['privilege_id'=>$privilege->id])->all();

        //Гарантии
        $assurance = Assurance::findOne(['region_key'=>$reg]);
        $listAssurance = ListAssurance::find()->where(['assurance_id'=>$assurance->id])->all();

        //Первый Синий блок
        $gettingFirst = GettingFirst::find()->where(['region_key'=>$reg])->one();

        //Второй Синий блок
        $gettingSecond = GettingSecond::findOne(['region_key'=>$reg]);


        //Тарифы

        $tariffs = Tariffs::findOne(['region_key'=>$reg]);
        $listTariffs = ListTariffs::find()->where(['tariffs_id'=>$tariffs->id])->all();
        $lisListTariffs = [];

        foreach ($listTariffs as $list) {
            $lisListTariffs[$list->id] = ListListTariffs::find()->where(['list_tariffs_id'=>$list->id])->all();
        }


        //Третий Синий блок

        $gettingThird = GettingThird::findOne(['region_key'=>$reg]);
        $listGettingThird = ListGettingThird::find()->where(['getting_third_id'=>$gettingThird->id])->all();


        //Сервисы

        $services = Services::findOne(['region_key'=>$reg]);
        $listServices = ListServices::find()->where(['services_id'=>$services->id])->all();


        //Четвертый Синий блок
        $gettingFourth = GettingFourth::findOne(['region_key'=>$reg]);


        //Знакомство с командой
        $team = Team::findOne(['region_key'=>$reg]);
        $listTeam = ListTeam::find()->where(['team_id'=>$team->id])->all();


        //Вопросы, ответы

        $question = Question::findOne(['region_key'=>$reg]);
        $listQuestion = ListQuestion::find()->where(['question_id'=>$question->id])->all();
        $lisListQuestion = [];
        $listModalQuestion = [];

        foreach ($listQuestion as $list) {
            $lisListQuestion[$list->id] = ListListQuestion::find()->where(['list_question_id'=>$list->id])->all();
            $listModalQuestion[$list->id] = ListModalQuestion::find()->where(['modal_question_id'=>$list->id])->all();
        }

        //Пятый синий блок
        $gettingFifth = GettingFifth::findOne(['region_key'=>$reg]);

        //Партнеры
        $partners = Partners::findOne(['id'=>1]);

        //Подвал
        $footer = Footer::findOne(['region_key'=>$reg]);


        //Ajax



        return $this->render('index',[

            'drop'=>$drop,
            'home'=>$home,
            'listHome'=>$listHome,
            'privilege'=>$privilege,
            'listPrivilege'=>$listPrivilege,
            'assurance' =>$assurance,
            'listAssurance'=>$listAssurance,
            'gettingFirst'=>$gettingFirst,
            'gettingSecond'=>$gettingSecond,
            'tariffs'=>$tariffs,
            'listTariffs'=>$listTariffs,
            'lisListTariffs'=>$lisListTariffs,
            'gettingThird'=>$gettingThird,
            'listGettingThird'=>$listGettingThird,
            'services'=>$services,
            'listServices'=>$listServices,
            'gettingFourth'=>$gettingFourth,
            'team'=>$team,
            'listTeam'=>$listTeam,
            'question'=>$question,
            'listQuestion'=>$listQuestion,
            'lisListQuestion'=>$lisListQuestion,
            'listModalQuestion'=>$listModalQuestion,
            'gettingFifth'=>$gettingFifth,
            'partners' => $partners,
            'footer'=>$footer,
        ]);
    }

}