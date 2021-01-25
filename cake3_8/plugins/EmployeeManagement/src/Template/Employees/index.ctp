<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<?= $this->Html->css('abc.css') ?>
<nav class="large-2 medium-3 columns" id="actions-sidebar" style="background:rgba(0,0,0,0.9)">
    <ul class="side-nav">
        <li class="heading"><?= __('Point of Sale') ?></li>
        
        <div class="dropdown">
            <p class="dropbtn">Products Management</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('New Product'), ['action' => 'add']) ?>
                <?= $this->Html->link(__('List of Products'), ['action' => 'index']) ?>
                <?= $this->Html->link(__('Update Product'), ['action' => 'edit']) ?>
                <?= $this->Html->link(__('Delete Product'), ['action' => 'delete']) ?>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropbtn">Categories</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('Add Category'), ['action' => 'add']) ?>
                <?= $this->Html->link(__('List of Categories'), ['action' => 'add']) ?>
                <?= $this->Html->link(__('Delete Categories'), ['action' => 'edit']) ?>
                <?= $this->Html->link(__('Update Categories'), ['action' => 'delete']) ?>
            </div>
        </div>
        </br>
        <div class="dropdown">
            <p class="dropbtn">Sales Report</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('Daily'), ['action' => 'add']) ?>
                <?= $this->Html->link(__('Monthly'), ['action' => 'edit']) ?>
                
            </div>
        </div>

        <div class="dropdown">
            <p class="dropbtn">Customer Management</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('Add Customer'), ['action' => 'add']) ?>    
                <?= $this->Html->link(__('List of Customer'), ['action' => 'add']) ?>
                <?= $this->Html->link(__('Delete Cutomer'), ['action' => 'edit']) ?>
                <?= $this->Html->link(__('Update Customer'), ['action' => 'delete']) ?>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropbtn">Employees Management</p>
            <div class="dropdown-content">
                <?= $this->Html->link(__('Add Employee'), ['action' => 'add']) ?>
                <?= $this->Html->link(__('List of Employees'), ['action' => 'index']) ?>
                <?= $this->Html->link(__('Delete Employee'), ['action' => 'delete']) ?>
                <?= $this->Html->link(__('Update Employee'), ['action' => 'edit']) ?>
            </div>
        </div>
        
    </ul>
</nav>
<div class="employees index large-10 medium-9 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $this->Number->format($employee->id) ?></td>
                <td><?= h($employee->name) ?></td>
                <td><?= $this->Number->format($employee->phone) ?></td>
                <td class="actions">
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
