<?php
use Migrations\AbstractMigration;

class AddForeignKeToOrderDetails extends AbstractMigration
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
        $table = $this->table('order_details');
        if ($table->exists() && !$table->hasColumn('order_id')) {
        $table->addColumn('order_id', 'integer', ['limit' => 100, 'null' => true ,'default' => null]);
        $table->addForeignKey('order_id',
        'Orders', 'id', ['delete' => 'CASCADE']);
        }
    $table->update();
}
}
