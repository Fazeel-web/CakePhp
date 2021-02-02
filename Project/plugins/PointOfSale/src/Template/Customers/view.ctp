<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $customer
 */
?>
        <?= __('Actions') ?> <br><br>
        <button><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </button>
        <button><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </button>
        <button><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </button>
        <button>><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </button>
<hr>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Name') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= h($customer->name) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Phone') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= h($customer->phone) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Id') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= $this->Number->format($customer->id) ?></td>
        </tr>
    </table>
</div>
