<?php
use Migrations\AbstractMigration;

class CreatOrders extends AbstractMigration
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
        $table = $this->table('orders');
        if ($table->exists()){

            $table->addColumn('customerPhone', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('totalproducts', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('totalprice', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('discount', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('grandtotal', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);

        }
        
        $table->update();
    }
}
