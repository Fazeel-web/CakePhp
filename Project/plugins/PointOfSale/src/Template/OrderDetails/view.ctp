<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $orderDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Detail'), ['action' => 'edit', $orderDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Detail'), ['action' => 'delete', $orderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderDetails view large-9 medium-8 columns content">
    <h3><?= h($orderDetail->id) ?></h3>
    <table class="vertical-table table w-100">

        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($orderDetail->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= h($orderDetail->quantity) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Pro') ?></th>
            <td><?= $orderDetail->has('pro') ? $this->Html->link($orderDetail->pro->name, ['controller' => 'Pros', 'action' => 'view', $orderDetail->pro->id]) : '' ?></td>
        </tr>

    </table>
</div>
