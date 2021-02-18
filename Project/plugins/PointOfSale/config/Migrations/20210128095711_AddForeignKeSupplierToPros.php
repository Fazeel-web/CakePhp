<?php
use Migrations\AbstractMigration;

class AddForeignKeSupplierToPros extends AbstractMigration
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
        $table = $this->table('pros');
        if ($table->exists() && !$table->hasColumn('supplier_id')) {
        $table->addColumn('supplier_id', 'integer', ['limit' => 100, 'null' => true ,'default' => null]);
        $table->addForeignKey('supplier_id',
        'suppliers', 'id', ['delete' => 'CASCADE'])
        ->update();
        }
    }
}
