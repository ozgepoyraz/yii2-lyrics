<?php

namespace ozgepoyraz\lyrics\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use ozgepoyraz\lyrics\models\Lyrics;

/**
 * LyricsSearch represents the model behind the search form of `backend\models\Lyrics`.
 */
class LyricsSearch extends Lyrics
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lyrics_id'], 'integer'],
            [['lyrics_title', 'musicians_musician_id', 'lyrics_content', 'lyrics_genre', 'lyrics_created_at'], 'safe'],
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
        $query = Lyrics::find();

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

        $query->joinWith('musiciansMusician');

        // grid filtering conditions
        $query->andFilterWhere([
            'lyrics_id' => $this->lyrics_id,
            'lyrics_created_at' => $this->lyrics_created_at,
        ]);

        $query->andFilterWhere(['like', 'lyrics_title', $this->lyrics_title])
            ->andFilterWhere(['like', 'lyrics_content', $this->lyrics_content])
            ->andFilterWhere(['like', 'lyrics_genre', $this->lyrics_genre])
            ->andFilterWhere(['like', 'musicians.musician_name', $this->musicians_musician_id]);

        return $dataProvider;
    }
}
