<?php
use Migrations\AbstractMigration;

class CreateAplicacoes extends AbstractMigration
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
        $table = $this->table('aplicacoes');
        $table->addColumn('nome','string',['limit'=>100]);
        $table->addColumn('dominio','string',['limit'=>100]);
        $table->addIndex(['dominio']);
        $table->addColumn('tld','char',['limit'=>2]);
        $table->addIndex(['tld']);
        $table->addColumn('data_ativacao','date');
        $table->addColumn('created','timestamp',['default' => 'CURRENT_TIMESTAMP']);
        $table->addColumn('modified','datetime',['default'=>null, 'null' => true]);
        $table->create();
    }
}
