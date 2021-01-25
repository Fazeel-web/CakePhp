<?php
namespace EmployeeManagement\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmployeeManagement\Model\Table\EmployeesTable;

/**
 * EmployeeManagement\Model\Table\EmployeesTable Test Case
 */
class EmployeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmployeeManagement\Model\Table\EmployeesTable
     */
    public $Employees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.EmployeeManagement.Employees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Employees') ? [] : ['className' => EmployeesTable::class];
        $this->Employees = TableRegistry::getTableLocator()->get('Employees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employees);

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
