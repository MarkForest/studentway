<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
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
                    <li class="active"><a href="#" data-nav-section="home"><span><?=$loc=='uk'?'Головна':'Главная'?></span></a></li>
                    <li><a href="#" data-nav-section="explore"><span><?=$loc=='uk'?'Переваги':'Преймущества'?></span></a></li>
                    <li><a href="#" data-nav-section="testimony"><span><?=$loc=='uk'?'Відгуки':'Отзывы'?></span></a></li>
                    <li><a href="#" data-nav-section="pricing"><span><?=$loc=='uk'?'Ціни':'Цены'?></span></a></li>
                    <li><a href="#" data-nav-section="team"><span><?=$loc=='uk'?'Наші спеціолісти':'Наши специолисты'?></span></a></li>
                </ul>

            </div>

        </nav>

    </div>
    <div class="drop hidden-xs">
        <button class="dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$drop?>
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><?= Html::a('Дніпро (uk)', ['course-polish/index?reg=dp&loc=uk']) ?></li>
            <li><?= Html::a('Днепр (ru)', ['course-polish/index?reg=dp&loc=ru']) ?></li>
            <li><?= Html::a('Київ (uk)', ['course-polish/index?reg=ky&loc=uk']) ?></li>
            <li><?= Html::a('Киев (ru)', ['course-polish/index?reg=ky&loc=ru']) ?></li>
            <li><?= Html::a('Харьків (uk)', ['course-polish/index?reg=kh&loc=uk']) ?></li>
            <li><?= Html::a('Харьков (ru)', ['course-polish/index?reg=kh&loc=ru']) ?></li>
            <li><?= Html::a('Вінниця (uk)', ['course-polish/index?reg=vn&loc=uk']) ?></li>
            <li><?= Html::a('Винница (ru)', ['course-polish/index?reg=vn&loc=ru']) ?></li>
            <li><?= Html::a('Кропівницький (uk)', ['course-polish/index?reg=kv&loc=uk']) ?></li>
            <li><?= Html::a('Кропивницкий (ru)', ['course-polish/index?reg=kv&loc=ru']) ?></li>
            <li><?= Html::a('Кременчуг (uk)', ['course-polish/index?reg=km&loc=uk']) ?></li>
            <li><?= Html::a('Кременчук (ru)', ['course-polish/index?reg=km&loc=ru']) ?></li>
            <li><?= Html::a('Ізмаил (uk)', ['course-polish/index?reg=iz&loc=uk']) ?></li>
            <li><?= Html::a('Измаил (ru)', ['course-polish/index?reg=iz&loc=ru']) ?></li>
            <li><?= Html::a('Одесса (uk)', ['course-polish/index?reg=od&loc=uk']) ?></li>
            <li><?= Html::a('Одесса (ru)', ['course-polish/index?reg=od&loc=ru']) ?></li>
            <li><?= Html::a('Біла Церква (uk)', ['course-polish/index?reg=bc&loc=uk']) ?></li>
            <li><?= Html::a('Белая Церковь (ru)', ['course-polish/index?reg=bc&loc=ru']) ?></li>
            <li><?= Html::a('Cлов\'янськ (uk)', ['course-polish/index?reg=sl&loc=uk']) ?></li>
            <li><?= Html::a('Славянск (uk)', ['course-polish/index?reg=sl&loc=uk']) ?></li>
        </ul>
    </div>
</header>

<section id="fh5co-home" data-section="home">
    <div class="gradient"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 home-first-text-block pull-left">
                <p class="text-block">
                    <?=$loc=='uk'?$home->header_title_1_uk:$home->header_title_1_ru?>
                </p>
            </div>

            <div class="col-md-6 home-first-text-block pull-right">
                <p class="text-block">
                    <?=$loc=='uk'?$home->header_title_2_uk:$home->header_title_2_ru?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 home-content-text-block">
                <h1><?=$loc=='uk'?$home->title_uk:$home->title_ru?></h1>
                <?php if (isset($listHome)):?>
                    <ul>
                        <?php foreach ($listHome as $list):?>
                            <li><i class="icon-check2"></i><?=$loc=='uk'?$list->text_uk:$list->text_ru?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>

            <div class="col-md-5 home-content-text-block">
                <div class="stock-block">
                    <p><?=$loc=='uk'?$home->stock_content_uk:$home->stock_content_ru?></p>
                </div>
                <div class="cast hidden-xs">
                    <p><?=$home->cost?><span>грн</span> </p>
                </div>
                <a href="#fh5co-footer">
                    <div class="cast-button">
                        <p><?=$loc=='uk'?$home->button_text_uk:$home->button_text_ru?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    </div>
</section>

<section id="fh5co-explore" data-section="explore">

    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate"><?=$loc=='uk'?$privilege->main_title_uk:$privilege->main_title_ru?></h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext to-animate">
                        <h3><?=$loc=='uk'?$privilege->disc_uk:$privilege->disc_ru?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fh5co-explore">
        <div class="gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 to-animate-2">
                    <div class="mt">
                        <h3><?=$loc=='uk'?$privilege->title_list_uk:$privilege->title_list_ru?></h3>
                        <ul class="list-nav">
                            <?php foreach ($listPrivilege as $list):?>
                                <li><i class="icon-check2"></i><?=$loc=='uk'?$list->text_uk:$list->text_ru?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 to-animate-2">
                    <img class="img-responsive" src="/images/explore.png" alt="work">
                </div>
            </div>
        </div>
    </div>

    <div class="fh5co-explore fh5co-explore-bg-color">
        <div class="bg-text">
            <div class="container">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate text-center"><?=$loc=='uk'?$assurance->main_title_uk:$assurance->main_title_ru?></h2>
                </div>
                <div class="row">
                    <div class="header-block-explore to-animate-3">
                        <div class="col-md-2 col-md-offset-3">
                            <h3 class=""><?=$loc=='uk'?$assurance->disc_title_uk:$assurance->disc_title_ru?></h3>
                            <img src="/images/icon_3373.png" alt="students" class="">
                        </div>
                        <div class="col-md-5">
                            <h3><?=$loc=='uk'?$assurance->disc_text_uk:$assurance->disc_text_ru?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="mt">
                            <?php foreach ($listAssurance as $list):?>
                                <div class="col-md-4 to-animate-3 text-center">
                                    <div class="block-garant center-block">
                                        <div class="text-garant">
                                            <p><?=$loc=='uk'?$list->text_uk:$list->text_ru?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="getting-started getting-started-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">
                <h3><?=isset($gettingFirst->disc_uk)?$gettingFirst->disc_uk:$gettingFirst->disc_ru?></h3>
            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right" data-toggle="modal" data-target="#recordForm">
                    <a class="sign-up"><?=isset($gettingFirst->button_text_uk)?$gettingFirst->button_text_uk:$gettingFirst->button_text_ru?></a>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="fh5co-testimony" data-section="testimony">
    <div class="container">
        <div class="row">
            <div class="col-md-12 to-animate">
                <div class="wrap-testimony">
                    <div class="owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="/images/person.jpg" alt="user">
                                </figure>
                                <blockquote>
                                    <p>"Велике спасибі за надану можливість познайомитися з командою польської мови. Кваліфіковані викладачі, які протягом тривалого часу навчання допомогли мені поліпшити іноземну мову. Практичні завдання, уроки, лекції, кіно кожен день збільшувала свій словниковий запас. Раджу всім працювати з вами!"</p>
                                </blockquote>
                                <span>Юліанна Мицик</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="/images/person2.jpg" alt="user">
                                </figure>
                                <blockquote>
                                    <p>"Мені дуже подобаються заняття, спасибі за таку велику перспективу навчання в Польщі. Я дуже задоволена навчанням."</p>
                                </blockquote>
                                <span>Катя Ярошенко</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="/images/person3.jpg" alt="user">
                                </figure>
                                <blockquote>
                                    <p>"Очень доступные и хорошо структурированные занятия по польскому языку. Нравится уроки "Начинаем говорить по польски" - повторять текст достаточно просто и незаметно запоминаешь необходимые слова и выражения. Бонус - появляются интересные фильмы на польском)."</p>
                                </blockquote>
                                <span>Тетяна Полонська</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="getting-started getting-started-1 block-with-clock">
    <div class="container">
        <div class="row">
            <div class="col-md-6 to-animate text-center">
                <h3 id="header-clock"><?=$getSecond['timerTitle']?></h3>
                <div id="CDT"></div>

            </div>
            <div class="col-md-6 to-animate-2">
                <h3><?=$getSecond['title']?></h3>
                <p><?=$getSecond['disc']?></p>
                <!--                <div class="call-to-action text-right">-->
                <!--                    <a href="#" class="sign-up">--><?//=$getSecond['buttonText']?><!--</a>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>

<section id="fh5co-pricing" data-section="pricing">
    <div class="fh5co-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?=$loc == 'uk'?$tariffs->title_uk:$tariffs->title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$loc == 'uk'?$tariffs->disc_uk:$tariffs->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="pricing">
                    <?php foreach ($listTariffs as $list):?>
                        <div class="col-md-4">
                            <div class="price-box to-animate-2 popular">
                                <h2 class="pricing-plan pricing-plan-offer"><?=$loc=='uk'?$list->title_uk:$list->title_ru?></h2>
                                <div class="price"><sup class="currency">грн</sup><?=$list->cost?><small>/<?=$loc=='uk'?'місяць':'меcяц'?></small></div>
                                <ul>
                                    <?php foreach ($lisListTariffs[$list->id] as $listList):?>
                                        <li><p><i class="icon-check2"></i><?=$loc == 'uk'?$listList->text_uk:$listList->text_ru?></p></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="getting-started getting-started-2">
    <div class="container">
        <div class="row">
            <div class="to-animate">
                <h3 class="text-center"><?=($loc =='uk')?$gettingThird->title_uk:$gettingThird->title_ru?></h3>
                <?php foreach ($listGettingThird as $list):?>
                    <div class="col-md-2 text-center">
                        <div class="col-md-9">
                            <img src="/images/<?=$list->image?>" class="img-responsive" alt="images">
                            <p><?=$loc == 'uk'?$list->text_uk:$list->text_ru?></p>
                        </div>
                        <div class="col-md-3">
                            <img src="/images/<?=$list->isLast==1?'micr.png':'red-plus-md.png'?>" alt="plus">
                        </div>
                    </div>
                <?php endforeach;?>

                <div class="col-md-2 text-center">
                    <h3><?=$gettingThird->cost?><br>грн/<?=$loc == 'uk'?'міс':'мес'?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="fh5co-services" data-section="services" class="hidden-xs">
    <div class="fh5co-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?= $loc == 'uk'?$services->header_title_ua:$services->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?= $loc == 'uk'?$services->disc_uk:$services->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listServices as $list):?>
                    <div class="col-md-4">
                        <div class="box-services">
                            <i class="<?=$list->image?> to-animate-2"></i>
                            <div class="fh5co-post to-animate">
                                <h3><?=$loc=='uk'?$list->block_title_uk:$list->block_title_ru?></h3>
                                <p><?=$loc=='uk'?$list->text_uk:$list->text_ru?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<div class="getting-started getting-started-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">
                <h3><?=$loc=='uk'?$gettingFourth->title_uk:$gettingFourth->title_ru?></h3>
                <p><?=$loc=='uk'?$gettingFourth->disc_uk:$gettingFourth->disc_ru?></p>
            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right">
                    <a href="<?=\yii\helpers\Url::to('https://m.me/studentWay20172018')?>" target="_blank" class="sign-up"><?=$loc=='uk'?$gettingFourth->button_text_uk:$gettingFourth->button_text_ru?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="fh5co-team" data-section="team">
    <div class="fh5co-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?=$loc == 'uk'?$team->header_title_uk:$team->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$loc == 'uk'?$team->disc_uk:$team->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listTeam as $list):?>
                    <div class="col-md-3">
                        <div class="team-box text-center to-animate-2">
                            <div class="user"><img class="img-reponsive" src="/images/<?=$list->image?>" alt="Коваленко Олег"></div>
                            <h3><?=$loc == 'uk'?$list->full_name_uk:$list->full_name_ru?></h3>
                            <span class="position"><?=$loc == 'uk'?$list->post_uk:$list->post_ru?></span>
                            <p><?=$loc == 'uk'?$list->text_uk:$list->text_ru?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>

<section id="fh5co-faq" data-section="faq" class="hidden-xs">
    <div class="fh5co-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?=$loc=='uk'?$question->header_title_uk:$question->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$loc=='uk'?$question->disc_uk:$question->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listQuestion as $list):?>
                    <div class="col-md-6">
                        <div class="box-faq to-animate-2">
                            <h3><?=$loc=='uk'?$list->title_uk:$list->title_ru?></h3>
                            <ul>
                                <?php foreach ($lisListQuestion[$list->id] as $listList):?>
                                    <li><i class="icon-question"></i><?=$loc=='uk'?$listList->text_uk:$listList->text_ru?></li>
                                <?php endforeach;?>
                                <li class="call-to-action"><a data-toggle="modal" data-target="#<?=$list->id?>"><?=$loc == 'uk'?$list->button_text_uk:$list->button_text_ru?></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>

<div class="getting-started getting-started-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">
                <h3><?=$loc=='uk'?$gettingFifth->title_uk:$gettingFifth->title_ru?></h3>
            </div>
            <div class="col-md-4 to-animate-2" data-toggle="modal" data-target="#askQuestionForm">
                <div class="call-to-action text-right">
                    <a class="sign-up"><?=$loc=='uk'?$gettingFifth->button_text_uk:$gettingFifth->button_text_ru?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-6 to-animate">
                <h3 class="section-title"><?=$loc=='uk'?$footer->aboutus_title_uk:$footer->aboutus_title_ru?></h3>
                <p><?=$loc=='uk'?$footer->about_text_uk:$footer->about_text_ru?></p>
                <p class="copy-right"><?=$loc=='uk'?$footer->copyright_uk:$footer->copyright_ru?><br>
                </p>
            </div>

            <div class="col-md-6 to-animate">
                <h3 class="section-title"><?=$loc=='uk'?$footer->address_title_uk:$footer->address_title_ru?></h3>
                <ul class="contact-info">
                    <li><i class="icon-map-marker"></i><?=$loc=='uk'?$footer->address_text_uk:$footer->address_text_ru?></li>
                    <li><i class="icon-phone"></i><?=$footer->phone_number?></li>
                    <li><i class="icon-envelope"></i><a href="#"><?=$footer->email?></a></li>
                    <li><i class="icon-globe2"></i><a href="#"><?=$footer->site?></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php foreach ($listQuestion as $list):?>
    <div class="modal fade" id="<?=$list->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel"><?=$loc=='uk'?$list->title_uk:$list->title_ru?></h3>
                </div>
                <div class="modal-body">
                    <?php foreach ($listModalQuestion[$list->id] as $listList):?>
                        <h4 class="page-header"><?=$loc =='uk'?$listList->title_uk:$listList->title_ru?></h4>
                        <p><?=$loc =='uk'?$listList->text_uk:$listList->text_ru?></p>
                    <?php endforeach;?>
                </div>
                <div class="modal-footer">
                    <a type="button" class="call-to-action" data-dismiss="modal"><?=$loc=='uk'?'Закрити':'Закрыть'?></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>



<div class="alert alert-success record-success">
    <?=$loc=='uk'?'Ви успішно записалися':'Запись прошла успешно'?>
</div>

<div class="alert alert-danger record-danger">
    <?=$loc=='uk'?'Ви вже записан.і':'Не вышло! Вы уже записались.'?>
</div>

<div class="alert alert-success ask-success">
    <?=$loc=='uk'?'Питання відправлено.':'Вопрос отпрален.'?>
</div>

<div class="alert alert-danger ask-danger">
    <?=$loc=='uk'?'Питання не відправлено!':'Вопрос не отправлен.'?>
</div>







