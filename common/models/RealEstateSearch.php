<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RealEstate;

/**
 * RealEstateSearch represents the model behind the search form of `common\models\RealEstate`.
 */
class RealEstateSearch extends RealEstate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'realestate_type_id', 'ads_type_id', 'currency_type_id', 'phone', 'state', 'realestate_space', 'rooms_number', 'hols_number', 'pathrooms_number', 'store_number', 'realestate_age', 'flats_number', 'user_id', 'views_number'], 'integer'],
            [['ads_name', 'realestate_place', 'latitude', 'longtude', 'realestate_price', 'created_at', 'realestate_image', 'realestate_recuretment_period', 'other_info'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RealEstate::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'realestate_type_id' => $this->realestate_type_id,
            'ads_type_id' => $this->ads_type_id,
            'currency_type_id' => $this->currency_type_id,
            'phone' => $this->phone,
            'created_at' => $this->created_at,
            'state' => $this->state,
            'realestate_space' => $this->realestate_space,
            'rooms_number' => $this->rooms_number,
            'hols_number' => $this->hols_number,
            'pathrooms_number' => $this->pathrooms_number,
            'store_number' => $this->store_number,
            'realestate_age' => $this->realestate_age,
            'flats_number' => $this->flats_number,
            'user_id' => \Yii::$app->user->id,
            'views_number' => $this->views_number,
        ]);

        $query->andFilterWhere(['like', 'ads_name', $this->ads_name])
            ->andFilterWhere(['like', 'realestate_place', $this->realestate_place])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longtude', $this->longtude])
            ->andFilterWhere(['like', 'realestate_price', $this->realestate_price])
            ->andFilterWhere(['like', 'realestate_image', $this->realestate_image])
            ->andFilterWhere(['like', 'realestate_recuretment_period', $this->realestate_recuretment_period])
            ->andFilterWhere(['like', 'other_info', $this->other_info]);

        return $dataProvider;
    }
}
