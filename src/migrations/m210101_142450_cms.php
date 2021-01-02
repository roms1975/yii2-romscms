<?php

use yii\db\Migration;

/**
 * Class m210101_142450_cms
 */
class m210101_142450_cms extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('domains', [
		'id' => $this->primaryKey(),
		'domain' => $this->string(128)->notNull(),
	    ]
	);

	$this->createTable('mc_pages', [
		'id' => $this->primaryKey(),
		'domain' => $this->integer()->defaultValue(1),
		'parent' => $this->integer(),
		'template' => $this->integer()->defaultValue(1),
		'active' => $this->boolean()->defaultValue(true),
		'deleted' => $this->boolean()->defaultValue(false),
		'is_default' => $this->boolean()->defaultValue(false),
		'updated' => $this->timestamp(),
		'ord' => $this->integer()->defaultValue(100),
	    ]
	);

	$this->createTable('mc_page_values', [
		'id' => $this->primaryKey(),
		'alt_name' => $this->string(128)->notNull(),
		'title' => $this->string(128)->notNull(),
		'description' => $this->string(128),
		'keywords' => $this->string(128),
		'menu_pic' => $this->string(128),
		'obj_id' => $this->integer(),
	    ]
	);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('domains');
        $this->dropTable('mc_pages');
        $this->dropTable('mc_page_values');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210101_142450_cms cannot be reverted.\n";

        return false;
    }
    */
}
