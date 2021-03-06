<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $employees
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></button>
<hr>
<div class="employees index large-9 medium-8 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table w-100">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="padding-left:40px;"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" style="padding-left:40px;"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col" style="padding-left:40px;"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col" style="padding-left:40px;" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $this->Number->format($employee->id) ?></td>
                <td style="padding-left:40px;"><?= h($employee->name) ?></td>
                <td style="padding-left:40px;"><?= $this->Number->format($employee->phone) ?></td>
                <td style="padding-left:40px;"><?= h($employee->address) ?></td>
                <td class="actions" style="padding-left:40px;">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
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
