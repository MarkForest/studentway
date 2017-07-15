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
                        <li><a href="#" data-nav-section="testimony"><span>Отзывы</span></a></li>
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
                    <h3 class="section-title">About Us</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                    <p class="copy-right">&copy; 2015 Union Free Template. <br>All Rights Reserved. <br>
                        Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a>
                        Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a> &amp; Dribbble Image by <a href="https://dribbble.com/tibi_neamu" target="_blank">Tiberiu</a>
                    </p>
                </div>

                <div class="col-md-4 to-animate">
                    <h3 class="section-title">Our Address</h3>
                    <ul class="contact-info">
                        <li><i class="icon-map-marker"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                        <li><i class="icon-phone"></i>+ 1235 2355 98</li>
                        <li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
                        <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                    </ul>
                    <h3 class="section-title">Connect with Us</h3>
                    <ul class="social-media">
                        <li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 to-animate">
                    <h3 class="section-title">Drop us a line</h3>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="map" class="fh5co-map"></div>

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
