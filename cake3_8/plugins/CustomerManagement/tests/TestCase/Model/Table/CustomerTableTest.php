<?php
namespace CustomerManagement\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use CustomerManagement\Model\Table\CustomerTable;

/**
 * CustomerManagement\Model\Table\CustomerTable Test Case
 */
class CustomerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CustomerManagement\Model\Table\CustomerTable
     */
    public $Customer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.CustomerManagement.Customer',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Customer') ? [] : ['className' => CustomerTable::class];
        $this->Customer = TableRegistry::getTableLocator()->get('Customer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Customer);

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
