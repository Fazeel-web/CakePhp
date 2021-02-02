<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $category
 */
?>
<?= __('Actions') ?> <br><br>
    <button>
        <?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?>
    </button>
    <button>
        <?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?>
    </button>
    <button>
        <?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?>
    </button>
        
    <hr>    

<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
