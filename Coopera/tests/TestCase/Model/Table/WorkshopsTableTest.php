<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkshopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkshopsTable Test Case
 */
class WorkshopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkshopsTable
     */
    public $Workshops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.workshops',
        'app.collaborators',
        'app.category_workshop',
        'app.registrations',
        'app.schedules',
        'app.clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Workshops') ? [] : ['className' => WorkshopsTable::class];
        $this->Workshops = TableRegistry::get('Workshops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Workshops);

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
