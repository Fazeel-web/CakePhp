<?php
use Migrations\AbstractMigration;

class CreatUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    { $table = $this->table('users');
        $table->addColumn('Email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Password', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
