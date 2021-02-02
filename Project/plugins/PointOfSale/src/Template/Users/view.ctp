<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </button>
        <button><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </button>
        <button><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </button>
        <button><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </button>
<hr>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Email') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= h($user->Email) ?></td>
        </tr>
        <tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Id') ?></th>
            <td style="padding-top:15px; padding-left:15px;"><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
</div>
