<?php
namespace PointOfSale\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $customerName
 * @property string $totalproducts
 * @property string $totalprice
 * @property int $discount
 * @property int $grandtotal
 * @property string $created
 * @property string $modified
 */
class Order extends Entity
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
        'customerName' => true,
        'totalproducts' => true,
        'totalprice' => true,
        'discount' => true,
        'grandtotal' => true,
        'created' => true,
        'modified' => true,
    ];
}
