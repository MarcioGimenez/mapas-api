<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocaisAplicacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocaisAplicacoesTable Test Case
 */
class LocaisAplicacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocaisAplicacoesTable
     */
    public $LocaisAplicacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.locais_aplicacoes',
        'app.aplicacoes',
        'app.locais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LocaisAplicacoes') ? [] : ['className' => LocaisAplicacoesTable::class];
        $this->LocaisAplicacoes = TableRegistry::get('LocaisAplicacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LocaisAplicacoes);

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
