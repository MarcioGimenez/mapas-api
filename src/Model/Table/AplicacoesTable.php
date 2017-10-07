<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aplicacoes Model
 *
 * @method \App\Model\Entity\Aplicaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aplicaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aplicaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aplicaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aplicaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aplicaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aplicaco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AplicacoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('aplicacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Search.Search');

        $this->searchManager()
            ->add('q', 'Search.Like',[
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparisan' => 'like',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['dominio','tld'],



            ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nome')
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('dominio')
            ->requirePresence('dominio', 'create')
            ->notEmpty('dominio');

        $validator
            ->scalar('tld')
            ->requirePresence('tld', 'create')
            ->notEmpty('tld');

        $validator
            ->date('data_ativacao')
            ->requirePresence('data_ativacao', 'create')
            ->notEmpty('data_ativacao');

        return $validator;
    }
}
