<?php

use yii\db\Schema;

class m140326_192835_create_table_item extends \yii\db\Migration
{
    public function up()
    {
        $this->createTable('Item', [
            'idItem' => 'INT UNSIGNED AUTO_INCREMENT PRIMARY KEY',
            'title' => 'VARCHAR(64) NOT NULL',
            'text' => 'TEXT',
            'status' => 'TINYINT DEFAULT 1',
        ]);
    }

    public function down()
    {
        $this->dropTable('Item');
    }
}
