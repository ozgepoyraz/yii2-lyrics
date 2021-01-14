<?php

namespace ozgepoyraz\lyrics\models;

use Yii;

/**
 * This is the model class for table "musicians".
 *
 * @property int $musician_id
 * @property string $musician_name
 * @property string|null $musician_age
 * @property string|null $musician_nationality
 * @property string|null $musician_created_at
 *
 * @property Lyrics[] $lyrics
 */
class Musicians extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'musicians';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['musician_name'], 'required'],
            [['musician_created_at'], 'safe'],
            [['musician_name', 'musician_age', 'musician_nationality'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'musician_id' => 'Musician ID',
            'musician_name' => 'Musician Name',
            'musician_age' => 'Musician Age',
            'musician_nationality' => 'Musician Nationality',
            'musician_created_at' => 'Musician Created At',
        ];
    }

    /**
     * Gets query for [[Lyrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLyrics()
    {
        return $this->hasMany(Lyrics::className(), ['musicians_musician_id' => 'musician_id']);
    }
}
