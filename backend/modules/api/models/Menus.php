<?php

namespace backend\modules\api\models;

use Yii;

/**
 * This is the model class for table "menus".
 *
 * @property int $id رقم القائمة
 * @property string $uid المعرف الفريد
 * @property string $menu_name اسم القائمة
 * @property string $menu_status حالة القائمة
 *
 * @property Categories[] $categories
 * @property OnlineOrders[] $onlineOrders
 * @property Orders[] $orders
 * @property Sales[] $sales
 */
class Menus extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'menu_name'], 'required'],
            [['menu_status'], 'string'],
            [['uid'], 'string', 'max' => 150],
            [['menu_name'], 'string', 'max' => 255],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['menu_name', 'menu_status']; //scenario values only accepted
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'رقم القائمة',
            'uid' => 'المعرف الفريد',
            'menu_name' => 'اسم القائمة',
            'menu_status' => 'حالة القائمة',
        ];
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['menu_id' => 'id']);
    }

    /**
     * Gets query for [[OnlineOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOnlineOrders()
    {
        return $this->hasMany(OnlineOrders::className(), ['menu_id' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['menu_id' => 'id']);
    }

    /**
     * Gets query for [[Sales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['menu_id' => 'id']);
    }
}
