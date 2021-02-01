<?php
namespace PointOfSale\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \PointOfSale\Model\Entity\User get($primaryKey, $options = [])
 * @method \PointOfSale\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \PointOfSale\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \PointOfSale\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \PointOfSale\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 255)
            ->requirePresence('Email', 'create')
            ->notEmptyString('Email');

        $validator
            ->scalar('Password')
            ->maxLength('Password', 255)
            ->requirePresence('Password', 'create')
            ->notEmptyString('Password');

        return $validator;
    }
}
