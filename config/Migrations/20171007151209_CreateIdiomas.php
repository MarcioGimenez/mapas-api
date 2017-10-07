<?php
use Migrations\AbstractMigration;

class CreateIdiomas extends AbstractMigration
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
        $table = $this->table('idiomas');
        $table->addColumn('aplicacao_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey('aplicacao_id', 'aplicacoes', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->addColumn('language','string',['limit'=>20]);
        $table->addColumn('created','timestamp',['default' => 'CURRENT_TIMESTAMP']);
        $table->addColumn('modified','datetime',['default'=>null, 'null' => true]);
        $table->create();
    }
}
