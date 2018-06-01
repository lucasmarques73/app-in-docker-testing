<?php


use Phinx\Migration\AbstractMigration;

class PostsMigration extends AbstractMigration
{
     /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('posts');
        $table->addColumn('title', 'string', ['limit' => 200])
              ->addIndex(['title'], [
                    'unique' => true,
                    'name' => 'idx_posts_titles'])
              ->addColumn('content', 'text',['null' => false])
              ->addColumn('created_at', 'date',['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('published', 'boolean',['default' => true])
              ->addColumn('user_id', 'integer')
              ->addForeignKey('user_id','users','id')
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}
