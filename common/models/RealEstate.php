<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "real_estate".
 *
 * @property int $id
 * @property string $ads_name اسم الأعلان
 * @property string $realestate_place مكان العقار
 * @property int $realestate_type_id نوع العقار
 * @property int $ads_type_id نوع الأعلان
 * @property string|null $latitude الأحداثي السيني
 * @property string|null $longtude الأحداثي الصادي
 * @property int $currency_type_id نوع العملة
 * @property string $realestate_price سعر العقار
 * @property int $phone رقم التواصل
 * @property string $created_at تاريخ الأعلان
 * @property string $updated_at تاريخ الأعلان
 * @property string $realestate_image صورة العقار
 * @property int $state الحالة
 * @property int|null $realestate_space المساحة
 * @property string|null $realestate_recuretment_period مدة التأجير
 * @property int|null $rooms_number عدد الغرف
 * @property int|null $hols_number عدد الصالات
 * @property int|null $pathrooms_number عدد الحمامات
 * @property int|null $store_number رقم الدور
 * @property int|null $realestate_age عمر العقار
 * @property string|null $other_info معلومات أضافية
 * @property int|null $flats_number عدد الشقق
 * @property int $user_id مععرف المستخدم
 * @property int|null $views_number عدد المشاهدات
 *
 * @property AdsType $adsType
 * @property CurrencyType $currencyType
 * @property RealEstateType $realestateType
 * @property Status $state0
 * @property User $user
 */
class RealEstate extends \yii\db\ActiveRecord
{

    public $photo;
    public $upload_folder = 'images';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'real_estate';
    }

    public function behaviors()
    {
        return [
        
            TimestampBehavior::class,
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ads_name', 'realestate_place', 'realestate_type_id', 'ads_type_id', 'currency_type_id', 'realestate_price', 'phone', 'realestate_image', 'state', 'user_id'], 'required'],
            [['realestate_type_id', 'ads_type_id', 'currency_type_id', 'state', 'realestate_space', 'created_at', 'updated_at', 'rooms_number', 'hols_number', 'pathrooms_number', 'store_number', 'realestate_age', 'flats_number', 'user_id', 'views_number'], 'integer'],
            [['other_info'], 'string'],
            [['photo'], 'file'],
            [['ads_name', 'latitude', 'longtude'], 'string', 'max' => 255],
            [['realestate_place'], 'string', 'max' => 200],
            [['realestate_price'], 'string', 'max' => 20],
            [['realestate_image'], 'string', 'max' => 400],
            [['phone'], 'string', 'max' => 20],
            [['realestate_recuretment_period'], 'string', 'max' => 100],
            [['ads_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdsType::className(), 'targetAttribute' => ['ads_type_id' => 'id']],
            [['currency_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CurrencyType::className(), 'targetAttribute' => ['currency_type_id' => 'id']],
            [['realestate_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => RealEstateType::className(), 'targetAttribute' => ['realestate_type_id' => 'id']],
            [['state'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['state' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ads_name' => 'اسم الأعلان',
            'realestate_place' => 'مكان العقار',
            'realestate_type_id' => 'نوع العقار',
            'ads_type_id' => 'نوع الأعلان',
            'latitude' => 'الأحداثي السيني',
            'longtude' => 'الأحداثي الصادي',
            'currency_type_id' => 'نوع العملة',
            'realestate_price' => 'سعر العقار',
            'phone' => 'رقم التواصل',
            'created_at' => 'تاريخ الأعلان',
            'updated_at' => 'تاريخ التعديل',
            'realestate_image' => 'صورة العقار',
            'state' => 'الحالة',
            'realestate_space' => 'المساحة',
            'realestate_recuretment_period' => 'مدة التأجير',
            'rooms_number' => 'عدد الغرف',
            'hols_number' => 'عدد الصالات',
            'pathrooms_number' => 'عدد الحمامات',
            'store_number' => 'رقم الدور',
            'realestate_age' => 'عمر العقار',
            'other_info' => 'معلومات أضافية',
            'flats_number' => 'عدد الشقق',
            'user_id' => 'مععرف المستخدم',
            'views_number' => 'عدد المشاهدات',
            'photo' => 'صورة العقار'
        ];
    }

    /**
     * Gets query for [[AdsType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdsType()
    {
        return $this->hasOne(AdsType::className(), ['id' => 'ads_type_id']);
    }

    /**
     * Gets query for [[CurrencyType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencyType()
    {
        return $this->hasOne(CurrencyType::className(), ['id' => 'currency_type_id']);
    }

    /**
     * Gets query for [[RealestateType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRealestateType()
    {
        return $this->hasOne(RealEstateType::className(), ['id' => 'realestate_type_id']);
    }

    /**
     * Gets query for [[State0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getState0()
    {
        return $this->hasOne(Status::className(), ['id' => 'state']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
