<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<?= $this->element("navbar"); ?>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            // echo $this->Form->control('image');

            echo $this->Form->input('image',['type'=>'file']);
            // echo $this->Form->control('file', ['label' => false, 'class' => 'form-control', 'type' => 'file']);
           

            echo $this->Form->control('description');
            echo $this->Form->control('category');
            echo $this->Form->control('quantity');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
