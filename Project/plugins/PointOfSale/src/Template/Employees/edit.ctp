<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $employee
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]
            )
        ?></button>
        <button><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></button>
<hr>
<div class="employees form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Edit Employee') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
