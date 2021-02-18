<?php
namespace PointOfSale\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderDetail Entity
 *
 * @property int $id
 * @property string $price
 * @property string $quantity
 * @property string $status
 * @property int|null $pro_id
 * @property int|null $order_id
 *
 * @property \PointOfSale\Model\Entity\Pro $pro
 */
class OrderDetail extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'price' => true,
        'quantity' => true,
        'status' => true,
        'pro_id' => true,
        'pro' => true,
    
        'order_id' => true,
        'order' => true,
    ];
}
