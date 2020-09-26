<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminusersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminusersTable Test Case
 */
class AdminusersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminusersTable
     */
    public $Adminusers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Adminusers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Adminusers') ? [] : ['className' => AdminusersTable::class];
        $this->Adminusers = TableRegistry::getTableLocator()->get('Adminusers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adminusers);

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
