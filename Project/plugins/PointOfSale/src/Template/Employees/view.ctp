<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $employee
 */
?>  
    <?= __('Actions') ?><br><br>
        <button><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </button>
        <button><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </button>
        <button><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </button>
        <button><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></button>
<hr>
<div class="employees view large-9 medium-8 columns content">
    <h3 style="text-align:left;"><?= h($employee->name) ?></h3>
    <table class="vertical-table table w-100">
        <tr>
            <th scope="row" style="padding-top:15px;" class="col-sm-1"><?= __('Name') ?></th>
            <td style="padding-top:15px; padding-left:15px;" class="col-sm-11"><?= h($employee->name) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;" class="col-sm-1"><?= __('Id') ?></th>
            <td style="padding-top:15px; padding-left:15px;" class="col-sm-11"><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;" class="col-sm-1"><?= __('Phone') ?></th>
            <td style="padding-top:15px; padding-left:15px;" class="col-sm-11"><?= $this->Number->format($employee->phone) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;" class="col-sm-1"><?= __('Address') ?></th>
            <td style="padding-top:15px; padding-left:15px;" class="col-sm-11"><?= $this->Number->format($employee->address) ?></td>
        </tr>
    </table>
</div>
