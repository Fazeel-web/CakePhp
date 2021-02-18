<?php
use Migrations\AbstractMigration;

class AddForeignKeyToOrderDetails extends AbstractMigration
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
        if ($table->exists() && !$table->hasColumn('pro_id')) {
        $table->addColumn('pro_id', 'integer', ['limit' => 10, 'null' => true ,'default' => null]);
        $table->addForeignKey('pro_id',
        'Pros', 'id', ['delete' => 'CASCADE']);
        }
    $table->update();
}
}
