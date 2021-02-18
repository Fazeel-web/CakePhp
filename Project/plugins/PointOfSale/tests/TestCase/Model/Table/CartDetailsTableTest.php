<?php
namespace PointOfSale\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use PointOfSale\Model\Table\CartDetailsTable;

/**
 * PointOfSale\Model\Table\CartDetailsTable Test Case
 */
class CartDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PointOfSale\Model\Table\CartDetailsTable
     */
    public $CartDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.PointOfSale.CartDetails',
        'plugin.PointOfSale.Customers',
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
        $config = TableRegistry::getTableLocator()->exists('CartDetails') ? [] : ['className' => CartDetailsTable::class];
        $this->CartDetails = TableRegistry::getTableLocator()->get('CartDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CartDetails);

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
