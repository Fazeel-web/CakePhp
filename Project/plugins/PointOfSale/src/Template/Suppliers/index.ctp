<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?></button>
        <button><?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?></button>
        <button><?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?></button>
<hr>
<div class="suppliers index large-9 medium-8 columns content">
    <h3><?= __('Suppliers') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table w-100">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="padding-left:40px;"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" style="padding-left:40px;"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col" style="padding-left:40px;"><?= $this->Paginator->sort('pro_id') ?></th>
                <th scope="col" style="padding-left:40px;" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier): ?>
            <tr>
                <td><?= $this->Number->format($supplier->id) ?></td>
                <td style="padding-left:40px;"><?= h($supplier->name) ?></td>
                <td style="padding-left:40px;"><?= h($supplier->phone) ?></td>
                <td style="padding-left:40px;"><?= $supplier->has('pro') ? $this->Html->link($supplier->pro->name, ['controller' => 'Pros', 'action' => 'view', $supplier->pro->id]) : '' ?></td>
                <td class="actions" style="padding-left:40px;">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?>
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
