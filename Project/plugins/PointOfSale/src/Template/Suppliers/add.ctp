<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $supplier
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?></button>
        <button><?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?></button>
        <button><?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?></button>
<hr>
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
