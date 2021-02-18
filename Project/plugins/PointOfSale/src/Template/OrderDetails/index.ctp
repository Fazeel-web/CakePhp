<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $orderDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderDetails index large-9 medium-8 columns content">
    <h3><?= __('Order Details') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table w-100">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pro_id',['label'=>'Products']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderDetails as $orderDetail): ?>
            <tr>
                <td><?= h($orderDetail->price) ?></td>
                <td><?= h($orderDetail->quantity) ?></td>
                <td><?= $orderDetail->has('pro') ? $this->Html->link($orderDetail->pro->name, ['controller' => 'Pros', 'action' => 'view', $orderDetail->pro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
