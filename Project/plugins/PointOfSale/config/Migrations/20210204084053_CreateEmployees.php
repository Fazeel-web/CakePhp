<?php
use Migrations\AbstractMigration;

class Createemployees extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    { 
        $table = $this->table('employees');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('phone', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('address', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
