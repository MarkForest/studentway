<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <header role="banner" id="fh5co-header">
        <div class="fluid-container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="index.html"><img src="/images/logo_bell.png"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" data-nav-section="home"><span>Головна</span></a></li>
                        <li><a href="#" data-nav-section="explore"><span>Переваги</span></a></li>
                        <li><a href="#" data-nav-section="testimony"><span>Відгуки</span></a></li>
                        <li><a href="#" data-nav-section="pricing"><span>Ціни</span></a></li>
                        <li><a href="#" data-nav-section="services"><span>Послуги</span></a></li>
                        <li><a href="#" data-nav-section="team"><span>Наші спеціолісти</span></a></li>
                        <li><a href="#" data-nav-section="faq"><span>Питання</span></a></li>
                        <li class="call-to-action"><a href="#"><span>Sign up free</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <?= $content?>


    <div id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 to-animate">
                    <h3 class="section-title">Про нас</h3>
                    <p>Наші викладачі знають всі особливості викладання польської для успішного старту в вищих навчальних закладах Польщі.</p>
                    <p class="copy-right">&copy; 2017 Studentway® Курси для абітурієнтів. <br>Всі права захищені.<br>
                    </p>
                </div>

                <div class="col-md-4 to-animate">
                    <h3 class="section-title">Наша адреса</h3>
                    <ul class="contact-info">
                        <li><i class="icon-map-marker"></i>49050, м Дніпро, пр-т Гагаріна, 115, офіс 43, офіс 25 - курси польської мови</li>
                        <li><i class="icon-phone"></i>+38 096 814 11 32</li>
                        <li><i class="icon-envelope"></i><a href="#">edu10@i.ua</a></li>
                        <li><i class="icon-globe2"></i><a href="#">www.studentway.org.ua</a></li>
                    </ul>
                    <h3 class="section-title">Зв'яжіться з нами</h3>
                    <ul class="social-media">
                        <li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 to-animate">
                    <h3 class="section-title">Залиште нам повідомлення</h3>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name" class="sr-only">ім'я</label>
                            <input type="name" class="form-control" id="name" placeholder="ім'я">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Повідомлення</label>
                            <textarea class="form-control" id="message" rows="7" placeholder="Повідомлення"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Відправити повідомлення">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="" class="fh5co-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1574.1825648634465!2d35.03735268163897!3d48.428722650805504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfcb347737be1%3A0x15519dc76710d6cc!2z0L_RgNC-0YHQv9C10LrRgiDQk9Cw0LPQsNGA0ZbQvdCwLCAxMTUsINCU0L3RltC_0YDQvsyBLCDQlNC90ZbQv9GA0L7Qv9C10YLRgNC-0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1500180526149" width="100%" height="450" frameborder="0" style="border:20px" allowfullscreen></iframe></div>

<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= $content ?>
<!--    </div>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
