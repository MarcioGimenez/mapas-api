<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocaisUsosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocaisUsosTable Test Case
 */
class LocaisUsosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocaisUsosTable
     */
    public $LocaisUsos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.locais_usos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LocaisUsos') ? [] : ['className' => LocaisUsosTable::class];
        $this->LocaisUsos = TableRegistry::get('LocaisUsos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LocaisUsos);

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
