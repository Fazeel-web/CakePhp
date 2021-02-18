<head>
    <style>
        th{
            padding:50px;
        }
        /* .td{
            padding:10px;
        } */
    </style>
</head>
<body>
    

<table cellpadding="0" cellspacing="0" class="table w-100">
            <thead>
                <tr>
                    
                    <th scope="col"><?= $this->Paginator->sort('customer_Name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('customer_Phone') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Total price') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Total Products') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Grand Total') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
           
            <tbody>
            
                <?php foreach ($orders as $order): ?>
                <tr>
                    
                    <td class="td"><?= h($order->customerName) ?></td>
                    <td><?= h($order->customerPhone) ?></td>
                    
                    <td class="td"><?= h($order->totalprice) ?></td>
                    <td class="td"><?= h($order->totalproducts) ?></td>
                    <td class="td"><?= h($order->grandtotal) ?></td>
                    
                    <td class="td"><?= $this->Form->postLink(__('View'), ['action' => 'selectAll', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?></td>
                  
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <hr>
        <button style="border:0px; padding:8px 25px 6px 24px;">
            <?= $this->Html->link(__('Add to Cart'),['controller' => 'OrderDetails','action' => 'add']) ?>
        </button>
        <hr>

        </body>