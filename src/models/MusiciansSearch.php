<?php

namespace ozgepoyraz\lyrics\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use ozgepoyraz\lyrics\models\Musicians;

/**
 * MusiciansSearch represents the model behind the search form of `backend\models\Musicians`.
 */
class MusiciansSearch extends Musicians
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['musician_id'], 'integer'],
            [['musician_name', 'musician_age', 'musician_nationality', 'musician_created_at'], 'safe'],
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
        $query = Musicians::find();

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
            'musician_id' => $this->musician_id,
            'musician_created_at' => $this->musician_created_at,
        ]);

        $query->andFilterWhere(['like', 'musician_name', $this->musician_name])
            ->andFilterWhere(['like', 'musician_age', $this->musician_age])
            ->andFilterWhere(['like', 'musician_nationality', $this->musician_nationality]);

        return $dataProvider;
    }
}
