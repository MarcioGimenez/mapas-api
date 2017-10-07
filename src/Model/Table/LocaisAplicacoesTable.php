<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LocaisAplicacoes Model
 *
 * @property \App\Model\Table\AplicacoesTable|\Cake\ORM\Association\BelongsTo $Aplicacoes
 * @property \App\Model\Table\LocaisTable|\Cake\ORM\Association\BelongsTo $Locais
 *
 * @method \App\Model\Entity\LocaisAplicaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\LocaisAplicaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LocaisAplicaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LocaisAplicaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LocaisAplicaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LocaisAplicaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LocaisAplicaco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LocaisAplicacoesTable extends Table
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

        $this->setTable('locais_aplicacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Aplicacoes', [
            'foreignKey' => 'aplicacao_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Locais', [
            'foreignKey' => 'locais_id',
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
        $rules->add($rules->existsIn(['locais_id'], 'Locais'));

        return $rules;
    }
}
