<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TurbinaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TurbinaTable Test Case
 */
class TurbinaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TurbinaTable
     */
    public $Turbina;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.turbina'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Turbina') ? [] : ['className' => TurbinaTable::class];
        $this->Turbina = TableRegistry::get('Turbina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Turbina);

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
