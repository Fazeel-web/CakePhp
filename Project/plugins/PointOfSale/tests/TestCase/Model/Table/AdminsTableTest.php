<?php
namespace PointOfSale\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use PointOfSale\Model\Table\AdminsTable;

/**
 * PointOfSale\Model\Table\AdminsTable Test Case
 */
class AdminsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PointOfSale\Model\Table\AdminsTable
     */
    public $Admins;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.PointOfSale.Admins',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Admins') ? [] : ['className' => AdminsTable::class];
        $this->Admins = TableRegistry::getTableLocator()->get('Admins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Admins);

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
