<head>
    <style>
        th{
            padding:5px;
        }
        td{
            padding:5px;
        }

    </style>
</head>
<table cellpadding="0" cellspacing="0" class="itable table w-100">
        <h3>Orders full Information</h3>
            <thead>
                <tr> 
                    <th scope="col"><?= $this->Paginator->sort('pro_id',['label'=>'Products']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Unit_price') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderDetails as $orderDetail): ?>
                    
                <tr>
                    
                    <td><?= $orderDetail->has('pro') ? $this->Html->link($orderDetail->pro->name, ['controller' => 'Pros', 'action' => 'view', $orderDetail->pro->id]) : '' ?></td>
                    <td><?= h($orderDetail->price) ?></td>
                    <td><?= h($orderDetail->quantity) ?></td>

                </tr>
                
                <?php endforeach; ?>
                
                <thead>
                
                    <tr class="t">
                    
                        <th scope="col"><?= $this->Paginator->sort('Customer_Name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Discount') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Grand_Price') ?></th>
                        
                        <th scope="col"><?= $this->Paginator->sort('Total_Products') ?></th>
                        
                    </tr>
                </thead>
                <tr>
                
                    <td><?= $orderDetail->has('order') ? $this->Html->link($orderDetail->order->customerName, ['controller' => 'Pros', 'action' => 'view', $orderDetail->order_id]) : '' ?></td>
                    
                    <td><?= $orderDetail->has('order') ? $this->Html->link($orderDetail->order->discount, ['controller' => 'Pros', 'action' => 'view', $orderDetail->order_id]) : '' ?></td>
                    <td><?= $orderDetail->has('order') ? $this->Html->link($orderDetail->order->grandtotal, ['controller' => 'Pros', 'action' => 'view', $orderDetail->order_id]) : '' ?></td>
                    <td><?= $orderDetail->has('order') ? $this->Html->link($orderDetail->order->totalproducts, ['controller' => 'Pros', 'action' => 'view', $orderDetail->order_id]) : '' ?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <button style="border:0px; padding:8px 25px 6px 24px;">
            <?= $this->Html->link(__('Back to Orders'),['controller' => 'OrderDetails','action' => 'confirm']) ?>
        </button>
        <button style="border:0px; padding:8px 25px 6px 24px;">
            <?= $this->Html->link(__('Add to Cart'),['controller' => 'OrderDetails','action' => 'add']) ?>
        </button>



