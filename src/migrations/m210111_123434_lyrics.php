<?php

use yii\db\Migration;

/**
 * Class m210111_123434_lyrics
 */
class m210111_123434_lyrics extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Lyrics Table
        $this->createTable('lyrics', [
            'lyrics_id' => $this->primaryKey(),
            'musicians_musician_id' => $this->integer()->notNull(),
            'lyrics_title' => $this->string()->notNull(),
            'lyrics_content' => $this->text()->notNull(),
            'lyrics_genre' => $this->string(),
            'lyrics_created_at' => $this->dateTime(),
        ]);

        //Musician Table
        $this->createTable('musicians', [
            'musician_id' => $this->primaryKey(),
            'musician_name' => $this->string()->notNull(),
            'musician_age' =>  $this->string(),
            'musician_nationality' =>  $this->string(),
            'musician_created_at' => $this->dateTime(),
        ]);

        //Index for relational columns
        $this->createIndex(
            'idx-lyrics-musicians_musician_id',
            'lyrics',
            'musicians_musician_id'
        );

        //Foreign Key for relation
        $this->addForeignKey(
            'fk-lyrics-musicians_musician_id',
            'lyrics',
            'musicians_musician_id',
            'musicians',
            'musician_id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        //Departmanlar
        $this->dropForeignKey(
            'fk-lyrics-musicians_musician_id',
            'lyrics'
        );

        $this->dropIndex(
            'idx-lyrics-musicians_musician_id',
            'lyrics'
        );

        $this->dropTable('musicians');

        //Firmalar
        $this->dropTable('lyrics');
        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_123434_lyrics cannot be reverted.\n";

        return false;
    }
    */
}
