<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CakeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CakeTable Test Case
 */
class CakeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CakeTable
     */
    public $Cake;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cake',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cake') ? [] : ['className' => CakeTable::class];
        $this->Cake = TableRegistry::getTableLocator()->get('Cake', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cake);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
