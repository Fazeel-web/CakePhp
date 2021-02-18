<?php
namespace PointOfSale\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @method \PointOfSale\Model\Entity\Order get($primaryKey, $options = [])
 * @method \PointOfSale\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \PointOfSale\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \PointOfSale\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \PointOfSale\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \PointOfSale\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
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

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('customerName')
            ->maxLength('customerName', 255)
            ->requirePresence('customerName', 'create')
            ->notEmptyString('customerName');

        $validator
            ->scalar('totalproducts')
            ->maxLength('totalproducts', 255)
            ->requirePresence('totalproducts', 'create')
            ->notEmptyString('totalproducts');

        $validator
            ->scalar('totalprice')
            ->maxLength('totalprice', 255)
            ->requirePresence('totalprice', 'create')
            ->notEmptyString('totalprice');

        $validator
            ->integer('discount')
            ->requirePresence('discount', 'create')
            ->notEmptyString('discount');

        $validator
            ->integer('grandtotal')
            ->requirePresence('grandtotal', 'create')
            ->notEmptyString('grandtotal');

        return $validator;
    }
}
