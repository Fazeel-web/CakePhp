<?php
namespace PointOfSale\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pro Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $quantity
 * @property string $image
 * @property int|null $category_id
 * @property int|null $supplier_id
 *
 * @property \PointOfSale\Model\Entity\Category $category
 * @property \PointOfSale\Model\Entity\Supplier $supplier
 * @property \PointOfSale\Model\Entity\Supplier[] $suppliers
 */
class Pro extends Entity
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
        'name' => true,
        'description' => true,
        'price' => true,
        'quantity' => true,
        'image' => true,
        'category_id' => true,
        'category' => true,
        'suppliers' => true,
        'supplier' => true,
        'supplier_id' => true,
    ];
}
