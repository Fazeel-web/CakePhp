<?php
use Migrations\AbstractMigration;

class ProductForeignKey extends AbstractMigration
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
        $table = $this->table('products');
        if ($table->exists() && !$table->hasColumn('categories_id')) {
            $table->addColumn('categories_id', 'integer', ['limit' => 100, 'null'=>true ,'default' => null]);
            $table->addForeignKey('categories_id',
                'categories', 'id', ['delete' => 'CASCADE'])
                ->update();
        }
    }
}
