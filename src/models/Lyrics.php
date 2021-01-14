<?php

namespace ozgepoyraz\lyrics\models;

use Yii;

/**
 * This is the model class for table "lyrics".
 *
 * @property int $lyrics_id
 * @property int $musicians_musician_id
 * @property string $lyrics_title
 * @property string $lyrics_content
 * @property string|null $lyrics_genre
 * @property string|null $lyrics_created_at
 *
 * @property Musicians $musiciansMusician
 */
class Lyrics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lyrics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['musicians_musician_id', 'lyrics_title', 'lyrics_content'], 'required'],
            [['musicians_musician_id'], 'integer'],
            [['lyrics_content'], 'string'],
            [['lyrics_created_at'], 'safe'],
            [['lyrics_title', 'lyrics_genre'], 'string', 'max' => 255],
            [['musicians_musician_id'], 'exist', 'skipOnError' => true, 'targetClass' => Musicians::className(), 'targetAttribute' => ['musicians_musician_id' => 'musician_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lyrics_id' => 'Lyrics ID',
            'musicians_musician_id' => 'Musicians Name',
            'lyrics_title' => 'Lyrics Title',
            'lyrics_content' => 'Lyrics Content',
            'lyrics_genre' => 'Lyrics Genre',
            'lyrics_created_at' => 'Lyrics Created At',
        ];
    }

    /**
     * Gets query for [[MusiciansMusician]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMusiciansMusician()
    {
        return $this->hasOne(Musicians::className(), ['musician_id' => 'musicians_musician_id']);
    }
}
