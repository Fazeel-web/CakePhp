<?php
use Migrations\AbstractMigration;

class AddForeignKy extends AbstractMigration
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
        $table = $this->table('suppliers');
        if ($table->exists() && !$table->hasColumn('pro_id')) {
        $table->addColumn('pro_id', 'integer', ['limit' => 100, 'null' => true ,'default' => null]);
        $table->addForeignKey('pro_id',
        'pros', 'id', ['delete' => 'CASCADE'])
        ->update();
    }
    }
}
