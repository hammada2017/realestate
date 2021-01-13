<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "real_estate_type".
 *
 * @property int $id
 * @property string $type نوع العقار
 *
 * @property RealEstate[] $realEstates
 */
class RealEstateType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'real_estate_type';
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
            'type' => 'نوع العقار',
        ];
    }

    /**
     * Gets query for [[RealEstates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRealEstates()
    {
        return $this->hasMany(RealEstate::className(), ['realestate_type_id' => 'id']);
    }
}
