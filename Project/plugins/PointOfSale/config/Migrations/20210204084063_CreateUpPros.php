<?php
use Migrations\AbstractMigration;

class CreateUpPros extends AbstractMigration
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
        if ($table->exists()){

            $table->addColumn('price', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('quantity', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('image', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);

        }
        
        $table->update();
    }
}
