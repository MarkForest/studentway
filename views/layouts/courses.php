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
                        <li class="call-to-action"><a href="#"><span>Uk</span></a></li>
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
                    <h3 class="section-title">Отримай знижку на послуги по вступу в Університети Польші  від 1500 грн, як випускник курсу Польська мова для абітурієнтів</h3>
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
    <!-- Modal for Methodology -->
    <div class="modal fade" id="methodology" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Методика навчання. Основні питання</h3>
                </div>
                <div class="modal-body">
                    <h4 class="page-header">Яка методика навчання використовується?</h4>
                    <p>Ми не дотримуємося якої-небудь певної методики, оскільки вважаємо, що ідеальної методики не існує - кожна з існуючих методик має свої переваги і свої недоліки. Тому, наше зайняття є комплексним підходом до вивчення англійської мови, яка поєднує в собі як традиційну, так і комунікативну методики одночасно. </p>
                    <h4 class="page-header">Скільки треба часу, щоб заговорити польською, якщо займатися "з нуля"?</h4>
                    <p>Це залежить від індивідуальних здібностей, мотивації, кількості зайняття і об'єму виконаної додатково самостійної роботи. В середньому, займаючись 2 рази в тиждень упродовж 4-5 місяців, наші клієнти можуть упевнено виконувати елементарні побутові комунікативні завдання.</p>
                    <h4 class="page-header">Чи зможу я вільно спілкуватися по закінченню курсів?</h4>
                    <p>Так, але за умови, що ви систематично відвідуватимете зайняття, в повному об'ємі виконуватимете домашні завдання, наслідуватимете усі рекомендації викладача Додатково самостійно займатися - читати літературу, переглядати фільми, прослуховувати аудіо матеріали англійською я зике і т.д.</p>
                    <h4 class="page-header">Мені потрібна польська  терміново. Чи можу я його вивчити за місяць?</h4>
                    <p>На жаль це неможливо. Але, ми можемо запропонувати вам спеціальний курс польсько мови, який допоможе вам підготуватися до необхідного події - туристичній поїздці, співбесіди, презентації і т.п.</p>
                    <h4 class="page-header">Чи є у вас носії мови?</h4>
                    <p>Так, ми співпрацюємо з носіями мови з Польщі.</p>
                    <h4 class="page-header">Чи треба виконувати домашнє завдання?</h4>
                    <p>Домашнє завдання теба виконувати обов’язково.</p>
                    <h4 class="page-header">Як ви тестуєте нових студентів перед початком навчання? </h4>
                    <p>Усі нові учні  повинні пройти тест на знання граматики, щоб визначити свій рівень. </p>
                    <h4 class="page-header">Які заняття краще - групові або індивідуальні?</h4>
                    <p>Однозначно відповіді немає на це питання - кожен вибирає для себе сам, виходячи зі своїх побажань, можливостей, цілей. Ми можемо лише сказати, що ми набираємо в групи не більше 6 чоловік і проявляємо індивідуальний підхід до кожного студента в групі. Групове зайняття проходить живіше і веселіше, постійний розклад дисциплінує, а група тримає вас в тонусі і " тягне" за собою. Також, важливий той факт, що вартість зайняття в групі - дешевше. Проте, вибравши індивідуальне зайняття, ви отримуєте 100% уваги викладача, вам не треба підлаштовуватися під групу, її розклад і ритм. На додаток, індивідуальне зайняття можна перенести на інший день без втрати оплати. </p>
                    <h4 class="page-header">Що краще - заняття з носіями чи вчителями польської?</h4>
                    <p>Безсумнівно, носії мови досконало володіють своєю рідною мовою і є ідеальним варіантом для розмовної практики. Але це за умови, що у Вас вже є певний рівень володіння апольською мовою, який допоможе вам здійснювати спілкування з носієм. Найбільший недолік носіїв полягає в тому, що по-перше: не всі носії навчені і дійсно вміють досвід викладача; по-друге: носії володіють тільки польською мовою і часто не розуміют української чи російської.
                        в той час, як українські  викладачі володіють і методикою викладання мови, і мають власний досвід вивчення мови - тому вони краще розуміють всі підводні камені, з якими стикаються студенти, завдяки чому, можуть допомогти ефективно їх подолати; по-третє, вартість занять з сертифікованим носієм мови в два - чотири рази вище, ніж заняття з українськими викладачами.</p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="call-to-action" data-dismiss="modal">Закрити</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Finance -->
    <div class="modal fade" id="finance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Фінанси. Основні питання.</h3>
                </div>
                <div class="modal-body">
                    <h4 class="page-header">Як робиться оплата? </h4>
                    <p>Оплата проводиться щомісячно за 8 проведених зайнять</p>
                    <h4 class="page-header">Йде перерахунок за кожне пропущене зайняття? </h4>
                    <p>Немає перерахунку немає</p>
                    <h4 class="page-header">Є у вас індивідуальне зайняття?</h4>
                    <p> Індивідуальні зайняття є, кожен окремий випадок обговорюється в офісі. </p>
                    <h4 class="page-header">Чи міняється оплата на курсах в впродовж року</h4>
                    <p>Зазвичай не міняється.</p>
                    <h4 class="page-header">Чи є пільги?</h4>
                    <p>Так, для тих, що уклали договір на послуги вступу до польського Вузу Ви не оплачуєте останній місяць зайняття (600-650 грн) чи Повинен я оплачувати увесь курс перед початком</p>
                    <h4 class="page-header">Чи повинен я оплачувати весь курс перед початком навчання?</h4>
                    <p>Ні. Помісячна оплата більш краща, але Ви можете оплачувати заняття так, як вважаєте за потрібне. </p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="call-to-action" data-dismiss="modal">Закрити</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Certificates-->
    <div class="modal fade" id="сertificates" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Сертифікати та іспити.</h3>
                </div>
                <div class="modal-body">
                    <h4 class="page-header"> Чи видається сертифікат після закінчення навчання?  </h4>
                    <p>Так, ми видаємо сертифікат після закінчення навчання, сертифікат визнається у Всіх ВУЗах партнерах StudentWay. З переліком партнерів можно ознайомитися на сайті studentway.org.ua
                        Чи готуєте Ви до проходження співбесіді в університети Польщі?
                        Так, ми маемо досвід роботи и практику проведення  співбесід у різних ВУЗах Пощі за останні 7 років. Ми підготовуем кожного абітурієнта до співбесіди.</p>
                    <h4 class="page-header">Ви готуєте студентів до здачі іспитів в Польщі?</h4>
                    <p>Так, ми допомагаємо студентам готуватися до різних іспитів.</p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="call-to-action" data-dismiss="modal">Закрити</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Organizational-->
    <div class="modal fade" id="organizational" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Основні організаційні питання</h3>
                </div>
                <div class="modal-body">
                    <h4 class="page-header">Як записатся на курси?</h4>
                    <p>Зателефонувати 38 096 814 11 32 або подйти за адресою ін. Гагаріна, 115, офіс 43 Як добратися на курси ? Будь-яким транспортом який проходить по ін. Гагаріна, зупинка парк Гагаріна, перехрестя Казакова Гагаріна. Коли починається зайняття? Зайняття може починатися в 16,00 або 18.00, дні тижня зазвичай вівторок -пятница, понеділок-четвер або середовище -суббота Ви пропонуєте безкоштовний ввідний урок? Так, взагалі-то, ви можете пройти свій перший 30-хвилинний урок абсолютно безкоштовно. У вас є книги на польській мові. Чи можу я узяти у вас книгу додому? Так, у нас чудова бібліотека книг і журналів. ПРОВЕДЕННЯ ЗАЙНЯТТЯ. ОСВНОВНЫЕ ПИТАННЯ Хто викладачі? Досвідчені фахівці з вищою лінгвістичною і додатковою освітою, високим рівнем володіння польської мови, досвідом роботи і спілкування з носіями мови. Скільки чоловік в групі? Максимальна кількість людина в групі - 6. Як проходить зайняття? Усе наше зайняття
                        Чи можу я привести друга на своє групове зайняття? Так, звичайно. Просто запросіть вашого друга прийти на ваш урок наступного разу. Як часто проходить групове зайняття? Більшість групового зайняття проходять двічі в тиждень. Чи треба мені купувати книги, щоб відвідувати зайняття? Ми надаємо усі необхідні матеріали для зайняття тексти і вправи у вигляді копій. </p>
                    <h4 class="page-header">Якщо, раптом, я не зможу потрапити на заняття, що мені треба робити?</h4>
                    <p>Якщо ви займаєтеся в групі і, з якоїсь причини, пропустили зайняття - вартість пропущеного зайняття не компенсується. Пропущений матеріал ви можете пройти самостійно або звернутися по допомогу і керівництво до викладача. Якщо пройти матеріал самостійно не представляється можливим, ви можете узяти індивідуальне зайняття. Як варіант, ми можемо запропонувати вам відвідати пропущене зайняття з іншою групою, за наявності такої і вільного місця в ній.</p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="call-to-action" data-dismiss="modal">Закрити</a>
                </div>
            </div>
        </div>
    </div>
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
