<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assurance".
 *
 * @property integer $id
 * @property string $main_title_uk
 * @property string $main_title_ru
 * @property string $disk_title_uk
 * @property string $disk_title_ru
 * @property string $disk_text_uk
 * @property string $disk_text_ru
 * @property string $region_key
 *
 * @property ListAssurance[] $listAssurances
 */
class Assurance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assurance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['main_title_uk', 'main_title_ru', 'disk_title_uk', 'disk_title_ru', 'disk_text_uk', 'disk_text_ru'], 'string'],
            [['region_key'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_title_uk' => 'Main Title Uk',
            'main_title_ru' => 'Main Title Ru',
            'disk_title_uk' => 'Disk Title Uk',
            'disk_title_ru' => 'Disk Title Ru',
            'disk_text_uk' => 'Disk Text Uk',
            'disk_text_ru' => 'Disk Text Ru',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListAssurances()
    {
        return $this->hasMany(ListAssurance::className(), ['assurance_id' => 'id']);
    }
}
