<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $orderDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Order Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($orderDetail) ?>
    <fieldset>
        <legend><?= __('Edit Order Detail') ?></legend>
        <?php

            echo $this->Form->control('price');
            echo $this->Form->control('quantity');

            echo $this->Form->control('pro_id', ['options' => $pros, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
