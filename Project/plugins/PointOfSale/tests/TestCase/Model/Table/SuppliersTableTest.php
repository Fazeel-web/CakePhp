<?php
namespace PointOfSale\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use PointOfSale\Model\Table\SuppliersTable;

/**
 * PointOfSale\Model\Table\SuppliersTable Test Case
 */
class SuppliersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PointOfSale\Model\Table\SuppliersTable
     */
    public $Suppliers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.PointOfSale.Suppliers',
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
        $config = TableRegistry::getTableLocator()->exists('Suppliers') ? [] : ['className' => SuppliersTable::class];
        $this->Suppliers = TableRegistry::getTableLocator()->get('Suppliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Suppliers);

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
