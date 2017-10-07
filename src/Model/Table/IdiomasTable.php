<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Idiomas Model
 *
 * @property \App\Model\Table\AplicacoesTable|\Cake\ORM\Association\BelongsTo $Aplicacoes
 *
 * @method \App\Model\Entity\Idioma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Idioma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Idioma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Idioma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idioma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Idioma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Idioma findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IdiomasTable extends Table
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

        $this->setTable('idiomas');
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
                'field' => ['aplicacao_id'],
            ]);

        $this->belongsTo('Aplicacoes', [
            'foreignKey' => 'aplicacao_id',
            'joinType' => 'INNER'
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
            ->scalar('language')
            ->requirePresence('language', 'create')
            ->notEmpty('language');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['aplicacao_id'], 'Aplicacoes'));

        return $rules;
    }
}
