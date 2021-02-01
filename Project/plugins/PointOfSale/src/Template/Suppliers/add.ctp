<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $supplier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="suppliers form large-9 medium-8 columns content">
    <?= $this->Form->create($supplier) ?>
    <fieldset>
        <legend><?= __('Add Supplier') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('pro_id', ['options' => $pros, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
