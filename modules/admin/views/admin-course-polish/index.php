<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<header role="banner" id="fh5co-header">
    <div class="fluid-container hidden">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="index.html"><img src="/images/logo_bell.png"></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-nav-section="home"><span>Головна | Главная</span></a></li>
                    <li><a href="#" data-nav-section="explore"><span>Переваги | Преймущества</span></a></li>
                    <li><a href="#" data-nav-section="testimony"><span>Відгуки | Отзывы</span></a></li>
                    <li><a href="#" data-nav-section="pricing"><span>Ціни | Цены</span></a></li>
                    <li><a href="#" data-nav-section="team"><span>Наші спеціолісти | Наши специолисты</span></a></li>
                </ul>

            </div>

        </nav>

    </div>
    <div class="drop hidden-xs">
        <button class="dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$drop?>
            <span class="caret"></span></button>
        <ul class="dropdown-menu" style="margin-left: -50px;">

            <li><?= Html::a('Днепр', ['admin-course-polish/index?reg=dp']) ?></li>
            <li><?= Html::a('Киев', ['admin-course-polish/index?reg=ky']) ?></li>
            <li><?= Html::a('Харьков', ['admin-course-polish/index?reg=kh']) ?></li>
            <li><?= Html::a('Винница', ['admin-course-polish/index?reg=vn']) ?></li>
            <li><?= Html::a('Кропивницкий', ['admin-course-polish/index?reg=kv']) ?></li>
            <li><?= Html::a('Кременчук', ['admin-course-polish/index?reg=km']) ?></li>
            <li><?= Html::a('Измаил', ['admin-course-polish/index?reg=iz']) ?></li>
            <li><?= Html::a('Одесса', ['admin-course-polish/index?reg=od']) ?></li>
            <li><?= Html::a('Белая Церковь', ['admin-course-polish/index?reg=bc']) ?></li>
            <li><?= Html::a('Славянск', ['admin-course-polish/index?reg=sl']) ?></li>
        </ul>
    </div>
</header>


<!--###############################################-->
<!--#################### HOME #####################-->

<?php $form = ActiveForm::begin(['id'=>'HomeForm'])?>
<?=$form->field($homeForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="fh5co-home" data-section="home">
    <div class="gradient"></div>
    <div class="container">

        <div class="row">
            <div class="col-md-6 home-first-text-block pull-left">
                <p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#header-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#header-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="header-title-uk" class="tab-pane fade in active">
                            <?=$form->field($homeForm,'header_title_1_uk')->textarea([
                                    'value'=>$home->header_title_1_uk,
                                    'class'=>'textarea',
                                    'rows'=>5,
                                    'cols'=>10
                            ])->label(false)?>
                        </div>
                        <div id="header-title-ru" class="tab-pane fade">
                            <?=$form->field($homeForm,'header_title_1_ru')->textarea([
                                    'value'=>$home->header_title_1_ru,
                                    'class'=>'textarea',
                                    'rows'=>5,
                                    'cols'=>10
                            ])->label(false)?>
                        </div>
                    </div>
                </p>
            </div>

            <div class="col-md-6 home-first-text-block pull-right">
                <p>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#header-title2-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#header-title2-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">
                    <div id="header-title2-uk" class="tab-pane fade in active">
                        <?=$form->field($homeForm,'header_title_2_uk')->textarea([
                            'value'=>$home->header_title_2_uk,
                            'class'=>'textarea',
                            'rows'=>5,
                            'cols'=>10
                        ])->label(false)?>

                    </div>
                    <div id="header-title2-ru" class="tab-pane fade">
                        <?=$form->field($homeForm,'header_title_2_ru')->textarea([
                            'value'=>$home->header_title_2_ru,
                            'class'=>'textarea',
                            'rows'=>5,
                            'cols'=>10
                        ])->label(false)?>

                    </div>
                </div>
                </p>
            </div>
        </div>



        <div class="row">
            <div class="col-md-7 home-content-text-block">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#home-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">
                    <div id="home-title-uk" class="tab-pane fade in active">
                        <h1>
                            <?=$form->field($homeForm,'title_uk')->textarea([
                                'value'=>$home->title_uk,
                                'class'=>'textarea',
                                'rows'=>3,
                                'cols'=>10
                            ])->label(false)?>
                        </h1>

                    </div>
                    <div id="home-title-ru" class="tab-pane fade">
                        <h1>
                            <?=$form->field($homeForm,'title_ru')->textarea([
                                'value'=>$home->title_ru,
                                'class'=>'textarea',
                                'rows'=>3,
                                'cols'=>10
                            ])->label(false)?>
                        </h1>

                    </div>
                </div>


                <?php if (isset($listHome)):?>
                    <ul>
                        <?php $count=1;?>
                        <?php foreach ($listHome as $list):?>

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="list-text-uk<?=$count?>" class="tab-pane fade in active">
                                    <li><i class="icon-check2"></i>
                                        <?=$form->field($homeForm,'listHome['.$list->id.'][text_uk]')->textarea([
                                            'value'=>$list->text_uk,
                                            'class'=>'textarea',
                                            'rows'=>2,
                                            'cols'=>10
                                        ])->label(false)?>
                                    </li>
                                </div>

                                <div id="list-text-ru<?=$count?>" class="tab-pane fade">
                                    <li><i class="icon-check2"></i>
                                        <?=$form->field($homeForm,'listHome['.$list->id.'][text_ru]')->textarea([
                                            'value'=>$list->text_ru,
                                            'class'=>'textarea',
                                            'rows'=>2,
                                            'cols'=>10
                                        ])->label(false)?>
                                    </li>
                                </div>

                            </div>
                        <?php $count++;?>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>

            <div class="col-md-5 home-content-text-block">
                <div class="stock-block">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home-stock-content-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#home-stock-content-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home-stock-content-uk" class="tab-pane fade in active">

                            <h3>
                                <?=$form->field($homeForm,'stock_content_uk')->textarea([
                                    'value'=>$home->stock_content_uk,
                                    'class'=>'textarea',
                                    'rows'=>6,
                                    'cols'=>10
                                ])->label(false)?>
                            </h3>


                        </div>
                        <div id="home-stock-content-ru" class="tab-pane fade">

                            <h3>
                                <?=$form->field($homeForm,'stock_content_ru')->textarea([
                                    'value'=>$home->stock_content_ru,
                                    'class'=>'textarea',
                                    'rows'=>6,
                                    'cols'=>10
                                ])->label(false)?>
                            </h3>

                        </div>
                    </div>

                </div>
                <div class="cast hidden-xs">
                    <h1>
                        <?=$form->field($homeForm,'cost')->textarea([
                            'value'=>$home->cost,
                            'class'=>'textInput',
                            'rows'=>1,
                        ])->label(false)?>
                    </h1>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home-button-text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#home-button-text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                    <div class="cast-button">

                        <div class="tab-content">
                            <div id="home-button-text-uk" class="tab-pane fade in active">

                               <h3>
                                   <?=$form->field($homeForm,'button_text_uk')->textarea([
                                       'value'=>$home->button_text_uk,
                                       'class'=>'textarea',
                                       'rows'=>3,
                                   ])->label(false)?>
                               </h3>


                            </div>
                            <div id="home-button-text-ru" class="tab-pane fade">

                                <h3>
                                    <?=$form->field($homeForm,'button_text_ru')->textarea([
                                        'value'=>$home->button_text_ru,
                                        'class'=>'textarea',
                                        'rows'=>3,
                                    ])->label(false)?>
                                </h3>

                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </div>

    </div>

</section>
<div class="container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>


    <!--###############################################-->
    <!--################# PRIVILEGE ###################-->

<section id="fh5co-explore" data-section="explore">

    <?php $form = ActiveForm::begin(['id'=>'PrivilegeForm'])?>
    <?=$form->field($privilegeForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#privilege-main-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#privilege-main-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">
                    <div id="privilege-main-title-uk" class="tab-pane fade in active">

                        <h2 style="text-align: center">
                            <?=$form->field($privilegeForm,'main_title_uk')->textarea([
                                'value'=>$privilege->main_title_uk,
                                'class'=>'textarea text-center',
                                'rows'=>1,
                            ])->label(false)?>
                        </h2>

                    </div>
                    <div id="privilege-main-title-ru" class="tab-pane fade">

                        <h2 class="text-center">
                            <?=$form->field($privilegeForm,'main_title_ru')->textarea([
                                'value'=>$privilege->main_title_ru,
                                'class'=>'textarea text-center',
                                'rows'=>1,
                            ])->label(false)?>
                        </h2>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext to-animate">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#privilege-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#privilege-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="privilege-disc-uk" class="tab-pane fade in active">

                                <h3>
                                    <?=$form->field($privilegeForm,'disc_uk')->textarea([
                                        'value'=>$privilege->disc_uk,
                                        'class'=>'textarea text-center',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>


                            </div>
                            <div id="privilege-disc-ru" class="tab-pane fade">

                                <h3>
                                    <?=$form->field($privilegeForm,'disc_ru')->textarea([
                                        'value'=>$privilege->disc_ru,
                                        'class'=>'textarea text-center',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>

                            </div>
                        </div>

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

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#privilege-title-list-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#privilege-title-list-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="privilege-title-list-uk" class="tab-pane fade in active">

                                <h3>
                                    <?=$form->field($privilegeForm,'title_list_uk')->textarea([
                                        'value'=>$privilege->title_list_uk,
                                        'class'=>'textarea',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>

                            </div>
                            <div id="privilege-title-list-ru" class="tab-pane fade">

                                <h3>
                                    <?=$form->field($privilegeForm,'title_list_ru')->textarea([
                                        'value'=>$privilege->title_list_ru,
                                        'class'=>'textarea',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>

                            </div>
                        </div>

                        <ul class="list-nav">
                            <?php $count=1?>
                            <?php foreach ($listPrivilege as $list):?>

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#privilege-list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#privilege-list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="privilege-list-text-uk<?=$count?>" class="tab-pane fade in active">
                                        <li><i class="icon-check2"></i>

                                            <?=$form->field($privilegeForm,'listPrivilege['.$list->id.'][text_uk]')->textarea([
                                                'value'=>$list->text_uk,
                                                'class'=>'textarea',
                                                'rows'=>2,
                                            ])->label(false)?>

                                        </li>
                                    </div>

                                    <div id="privilege-list-text-ru<?=$count?>" class="tab-pane fade">
                                        <li><i class="icon-check2"></i>

                                            <?=$form->field($privilegeForm,'listPrivilege['.$list->id.'][text_ru]')->textarea([
                                                'value'=>$list->text_ru,
                                                'class'=>'textarea',
                                                'rows'=>2,
                                            ])->label(false)?>

                                        </li>
                                    </div>

                                </div>

                                <?php $count++?>
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

    <div class="container save-container">
        <div class="vertical-line center-block"></div>
        <input type="submit" class="button-save center-block" value="Сохранить">
    </div>
    <?php ActiveForm::end()?>

    <!--###############################################-->
    <!--################# ASSURANCE ###################-->

    <div class="fh5co-explore fh5co-explore-bg-color">
        <div class="bg-text">
            <div class="container">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate text-center"><?=$assurance->main_title_uk.' | '.$assurance->main_title_ru?></h2>
                </div>
                <div class="row">
                    <div class="header-block-explore to-animate-3">
                        <div class="col-md-2 col-md-offset-3">
                            <h3 class=""><?=$assurance->disc_title_uk.' | '.$assurance->disc_title_ru?></h3>
                            <img src="/images/icon_3373.png" alt="students" class="">
                        </div>
                        <div class="col-md-5">
                            <h3><?=$assurance->disc_text_uk.' | '.$assurance->disc_text_ru?></h3>
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
                                            <p><?=$list->text_uk.' | '.$list->text_ru?></p>
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
                <h3><?=$gettingFirst->disc_uk.' | '.$gettingFirst->disc_ru?></h3>
            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right" data-toggle="modal" data-target="#recordForm">
                    <a class="sign-up"><?=$gettingFirst->button_text_uk.' | '.$gettingFirst->button_text_ru?></a>
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
                <h3 id="header-clock"><?=$gettingSecond->timer_title_uk.' | '.$gettingSecond->timer_title_ru?></h3>
                <div id="CDT"></div>

            </div>
            <div class="col-md-6 to-animate-2">
                <h3><?=$gettingSecond->title_uk.' | '.$gettingSecond->title_ru?></h3>
                <p><?=$gettingSecond->disc_uk.' | '.$gettingSecond->disc_ru?></p>
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
                    <h2 class="to-animate"><?=$tariffs->title_uk.' | '.$tariffs->title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$tariffs->disc_uk.' | '.$tariffs->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="pricing">
                    <?php foreach ($listTariffs as $list):?>
                        <div class="col-md-4">
                            <div class="price-box to-animate-2 popular">
                                <h2 class="pricing-plan pricing-plan-offer"><?=$list->title_uk.' | '.$list->title_ru?></h2>
                                <div class="price"><sup class="currency">грн</sup><?=$list->cost?><small>/місяць | меcяц</small></div>
                                <ul>
                                    <?php foreach ($lisListTariffs[$list->id] as $listList):?>
                                        <li><p><i class="icon-check2"></i><?=$listList->text_uk.' | '.$listList->text_ru?></p></li>
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
                <h3 class="text-center"><?=$gettingThird->title_uk.' | '.$gettingThird->title_ru?></h3>
                <?php foreach ($listGettingThird as $list):?>
                    <div class="col-md-2 text-center">
                        <div class="col-md-9">
                            <img src="/images/<?=$list->image?>" class="img-responsive" alt="images">
                            <p><?=$list->text_uk.' | '.$list->text_ru?></p>
                        </div>
                        <div class="col-md-3">
                            <img src="/images/<?=$list->isLast==1?'micr.png':'red-plus-md.png'?>" alt="plus">
                        </div>
                    </div>
                <?php endforeach;?>

                <div class="col-md-2 text-center">
                    <h3><?=$gettingThird->cost?><br>грн/міс | мес</h3>
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
                    <h2 class="to-animate"><?= $services->header_title_ua.' | '.$services->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$services->disc_uk.' | '.$services->disc_ru?></h3>
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
                                <h3><?=$list->block_title_uk.' | '.$list->block_title_ru?></h3>
                                <p><?=$list->text_uk.' | '.$list->text_ru?></p>
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
                <h3><?=$gettingFourth->title_uk.' | '.$gettingFourth->title_ru?></h3>
                <p><?=$gettingFourth->disc_uk.' | '.$gettingFourth->disc_ru?></p>
            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right">
                    <a href="<?=\yii\helpers\Url::to('https://m.me/studentWay20172018')?>" target="_blank" class="sign-up"><?=$gettingFourth->button_text_uk.' | '.$gettingFourth->button_text_ru?></a>
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
                    <h2 class="to-animate"><?=$team->header_title_uk.' | '.$team->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$team->disc_uk.' | '.$team->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listTeam as $list):?>
                    <div class="col-md-3">
                        <div class="team-box text-center to-animate-2">
                            <div class="user"><img class="img-reponsive" src="/images/<?=$list->image?>" alt="Коваленко Олег"></div>
                            <h3><?=$list->full_name_uk.' | '.$list->full_name_ru?></h3>
                            <span class="position"><?=$list->post_uk.' | '.$list->post_ru?></span>
                            <p><?=$list->text_uk.' | '.$list->text_ru?></p>
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
                    <h2 class="to-animate"><?=$question->header_title_uk.' | '.$question->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$question->disc_uk.' | '.$question->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listQuestion as $list):?>
                    <div class="col-md-6">
                        <div class="box-faq to-animate-2">
                            <h3><?=$list->title_uk.' | '.$list->title_ru?></h3>
                            <ul>
                                <?php foreach ($lisListQuestion[$list->id] as $listList):?>
                                    <li><i class="icon-question"></i><?=$listList->text_uk.' | '.$listList->text_ru?></li>
                                <?php endforeach;?>
                                <li class="call-to-action"><a data-toggle="modal" data-target="#<?=$list->id?>"><?=$list->button_text_uk.' | '.$list->button_text_ru?></a></li>
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
                <h3><?=$gettingFifth->title_uk.' | '.$gettingFifth->title_ru?></h3>
            </div>
            <div class="col-md-4 to-animate-2" data-toggle="modal" data-target="#askQuestionForm">
                <div class="call-to-action text-right">
                    <a class="sign-up"><?=$gettingFifth->button_text_uk.' | '.$gettingFifth->button_text_ru?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-6 to-animate">
                <h3 class="section-title"><?=$footer->aboutus_title_uk.' | '.$footer->aboutus_title_ru?></h3>
                <p><?=$footer->about_text_uk.' | '.$footer->about_text_ru?></p>
                <p class="copy-right"><?=$footer->copyright_uk.' | '.$footer->copyright_ru?><br>
                </p>
            </div>

            <div class="col-md-6 to-animate">
                <h3 class="section-title"><?=$footer->address_title_uk.' | '.$footer->address_title_ru?></h3>
                <ul class="contact-info">
                    <li><i class="icon-map-marker"></i><?=$footer->address_text_uk.' | '.$footer->address_text_ru?></li>
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
                    <h3 class="modal-title" id="myModalLabel"><?=$list->title_uk.' | '.$list->title_ru?></h3>
                </div>
                <div class="modal-body">
                    <?php foreach ($listModalQuestion[$list->id] as $listList):?>
                        <h4 class="page-header"><?=$listList->title_uk.' | '.$listList->title_ru?></h4>
                        <p><?=$listList->text_uk.' | '.$listList->text_ru?></p>
                    <?php endforeach;?>
                </div>
                <div class="modal-footer">
                    <a type="button" class="call-to-action" data-dismiss="modal">Закрити | Закрыть</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>



<div class="alert alert-success record-success">
    Изменения сохранены успешно!
</div>

<div class="alert alert-danger record-danger">
    Изменения не сохранены, что-то пошло не так!
</div>








