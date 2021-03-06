<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AplicacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AplicacoesTable Test Case
 */
class AplicacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AplicacoesTable
     */
    public $Aplicacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aplicacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Aplicacoes') ? [] : ['className' => AplicacoesTable::class];
        $this->Aplicacoes = TableRegistry::get('Aplicacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aplicacoes);

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
