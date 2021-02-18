<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $supplier
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id]) ?> </button>
        <button><?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?> </button>
        <button><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?> </button>
        <button><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?> </button>
        <button><?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?> </button>
        <button><?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?> </button>
<hr>
<div class="suppliers view large-9 medium-8 columns content">
    <h3 style="text-align:left;"><?= h($supplier->name) ?></h3>
    <table class="vertical-table table w-100">
        <tr>
            <th scope="row" class="col-sm-1" style="padding-top:15px;"><?= __('Name') ?></th>
            <td class="col-sm-11" style="padding-top:15px; padding-left:15px;"><?= h($supplier->name) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Phone') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= h($supplier->phone) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Pro') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= $supplier->has('pro') ? $this->Html->link($supplier->pro->name, ['controller' => 'Pros', 'action' => 'view', $supplier->pro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Id') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= $this->Number->format($supplier->id) ?></td>
        </tr>
    </table>
</div>
