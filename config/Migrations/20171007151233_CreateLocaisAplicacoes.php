<?php
use Migrations\AbstractMigration;

class CreateLocaisAplicacoes extends AbstractMigration
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
        $table = $this->table('locais_aplicacoes');
        $table->addColumn('aplicacao_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey('aplicacao_id', 'aplicacoes', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->addColumn('locais_id','integer',[
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex(['locais_id']);
        $table->addColumn('created','timestamp',['default' => 'CURRENT_TIMESTAMP']);
        $table->addColumn('modified','datetime',['default'=>null, 'null' => true]);

        $table->create();
    }
}
