<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LocaisUsos Model
 *
 * @method \App\Model\Entity\LocaisUso get($primaryKey, $options = [])
 * @method \App\Model\Entity\LocaisUso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LocaisUso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LocaisUso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LocaisUso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LocaisUso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LocaisUso findOrCreate($search, callable $callback = null, $options = [])
 */
class LocaisUsosTable extends Table
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

        $this->setTable('locais_usos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
}
