<?php
use Migrations\AbstractMigration;

class CreateConfiguracoes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('configuracoes');
        $table->addColumn('aplicacao_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey('aplicacao_id', 'aplicacoes', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->addColumn('linguagem','string',['limit'=>20]);
        $table->addColumn('capital','string',['limit'=>20]);
        $table->addColumn('whois','string',['limit'=>20]);
        $table->addColumn('coordenadas','string',['limit'=>30]);
        $table->addColumn('pub','string',['limit'=>20]);
        $table->addColumn('id_criterio','string',['limit'=>20]);
        $table->addColumn('bandeira','string',['limit'=>30]);
        $table->addColumn('created','timestamp',['default' => 'CURRENT_TIMESTAMP']);
        $table->addColumn('modified','datetime',['default'=>null, 'null' => true]);





        $table->create();
    }
}
