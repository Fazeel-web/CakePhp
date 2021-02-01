<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    
        <legend><?= __('Add Pro') ?></legend>
        

    
</nav>
<div class="pros form large-9 medium-8 columns content">
    <?= $this->Form->create($pro,array('type'=>'file')) ?>
    <fieldset>
        
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('quantity');
            echo $this->Form->control('file', ['label' => __('Image'), 'class' => 'form-control', 'type' => 'file']) ;
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
