<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ads_type".
 *
 * @property int $id
 * @property string $type نوع الأعلان
 *
 * @property RealEstate[] $realEstates
 */
class AdsType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ads_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'نوع الأعلان',
        ];
    }

    /**
     * Gets query for [[RealEstates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRealEstates()
    {
        return $this->hasMany(RealEstate::className(), ['ads_type_id' => 'id']);
    }
}
