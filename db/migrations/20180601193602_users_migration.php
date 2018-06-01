<?php


use Phinx\Migration\AbstractMigration;

class UsersMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['limit' => 150])
              ->addColumn('email', 'string', ['limit' => 100])
              ->addIndex(['email'], [
                    'unique' => true,
                    'name' => 'idx_users_email'])
              ->addColumn('pass', 'string', ['limit' => 100])
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
