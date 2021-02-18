<?php
namespace PointOfSale\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use PointOfSale\Model\Table\OrderDetailsTable;

/**
 * PointOfSale\Model\Table\OrderDetailsTable Test Case
 */
class OrderDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PointOfSale\Model\Table\OrderDetailsTable
     */
    public $OrderDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.PointOfSale.OrderDetails',
        'plugin.PointOfSale.Pros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrderDetails') ? [] : ['className' => OrderDetailsTable::class];
        $this->OrderDetails = TableRegistry::getTableLocator()->get('OrderDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderDetails);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
