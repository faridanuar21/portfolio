<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project_image}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%file}}`
 */
class m230420_072843_create_project_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project_image}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'foreignKey',
            'file_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `file_id`
        $this->createIndex(
            '{{%idx-project_image-file_id}}',
            '{{%project_image}}',
            'file_id'
        );

        // add foreign key for table `{{%file}}`
        $this->addForeignKey(
            '{{%fk-project_image-file_id}}',
            '{{%project_image}}',
            'file_id',
            '{{%file}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%file}}`
        $this->dropForeignKey(
            '{{%fk-project_image-file_id}}',
            '{{%project_image}}'
        );

        // drops index for column `file_id`
        $this->dropIndex(
            '{{%idx-project_image-file_id}}',
            '{{%project_image}}'
        );

        $this->dropTable('{{%project_image}}');
    }
}
