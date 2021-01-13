<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "currency_type".
 *
 * @property int $id
 * @property string $currency نوع العملة
 *
 * @property RealEstate[] $realEstates
 */
class CurrencyType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currency'], 'required'],
            [['currency'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'currency' => 'نوع العملة',
        ];
    }

    /**
     * Gets query for [[RealEstates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRealEstates()
    {
        return $this->hasMany(RealEstate::className(), ['currency_type_id' => 'id']);
    }
}
