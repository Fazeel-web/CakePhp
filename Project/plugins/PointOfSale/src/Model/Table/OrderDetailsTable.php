<?php
namespace PointOfSale\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderDetails Model
 *
 * @property \PointOfSale\Model\Table\ProsTable&\Cake\ORM\Association\BelongsTo $Pros
 *
 * @method \PointOfSale\Model\Entity\OrderDetail get($primaryKey, $options = [])
 * @method \PointOfSale\Model\Entity\OrderDetail newEntity($data = null, array $options = [])
 * @method \PointOfSale\Model\Entity\OrderDetail[] newEntities(array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\OrderDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \PointOfSale\Model\Entity\OrderDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \PointOfSale\Model\Entity\OrderDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\OrderDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\OrderDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class OrderDetailsTable extends Table
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

        $this->setTable('order_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pros', [
            'foreignKey' => 'pro_id',
            'className' => 'PointOfSale.Pros',
        ]);

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'className' => 'PointOfSale.Orders',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('quantity')
            ->maxLength('quantity', 255)
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

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
        $rules->add($rules->existsIn(['pro_id'], 'Pros'));

        return $rules;
    }
}
