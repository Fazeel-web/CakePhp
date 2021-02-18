<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pro
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pro->id)]
            )
        ?></button>
        <button><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <button><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></button>
        <button><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></button>
        <button><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?></button>
        <button><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?></button>
<hr>
<div class="pros form large-9 medium-8 columns content">
    <?= $this->Form->create($pro) ?>
    <fieldset>
        <legend><?= __('Edit Pro') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('quantity');
            echo $this->Form->control('file', ['label' => false, 'class' => 'form-control', 'type' => 'file']) ;

            echo $this->Html->image( $pro->image, ['border' => '0', 'data-src' => $pro->image, 'class' => 'img-responsive','style'=>'width:200px; height:100px;']);
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
            echo $this->Form->control('supplier_id', ['options' => $suppliers, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <br>
    <hr>
</div>
