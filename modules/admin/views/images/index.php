<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Admin|Images'
?>

<div id="photo-page">
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Изображения для блока "Наша Команда"</h2>
        </div>
        <div class="panel-body">
    <?php foreach ($teamImages as $list):?>
        <h2 class="page-header">
            <i class="icon-arrow-down-circle"> <?=\app\resourse\Resourse::getCity($list->region_key)?></i>
        </h2>
        <div class="row">
        <?php foreach ($list->listTeams as $listImage):?>
                <div class="col-md-3">
                    <div class="thumbnail text-center">
                        <p><?=$listImage->full_name_ru?></p>
                        <img src="/images/<?=$listImage->image?>" alt="image<?=$listImage->id?>" class="img-responsive">
                        <br>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['index','id'=>$listImage->id,'t'=>'team']]) ?>
                        <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                        <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
        <?php endforeach;?>
        </div>
    <?php endforeach;?>
        </div>
    </div>


    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Изображения для блока "Привилегии"</h2>
        </div>
        <div class="panel-body">
            <div class="row">
            <?php foreach ($privilege as $list):?>
                    <div class="col-md-4">
                        <h2 class="page-header">
                            <i class="icon-arrow-down-circle"> <?=\app\resourse\Resourse::getCity($list->region_key)?></i>
                        </h2>
                        <div class="thumbnail text-center">
                            <img src="/images/<?=$list->image?>" alt="image<?=$list->id?>" class="img-responsive">
                            <br>
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],'action'=>['index','id'=>$list->id,'t'=>'privilege']]) ?>
                            <?= $form->field($model, 'imageFile')->fileInput()->label(false)?>
                            <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

