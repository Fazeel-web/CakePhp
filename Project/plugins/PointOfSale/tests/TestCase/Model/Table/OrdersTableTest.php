<?php
namespace PointOfSale\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use PointOfSale\Model\Table\OrdersTable;

/**
 * PointOfSale\Model\Table\OrdersTable Test Case
 */
class OrdersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PointOfSale\Model\Table\OrdersTable
     */
    public $Orders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.PointOfSale.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Orders') ? [] : ['className' => OrdersTable::class];
        $this->Orders = TableRegistry::getTableLocator()->get('Orders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Orders);

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
