<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pro
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
    
        <legend><?= __('Add Product') ?></legend>
        

    
</nav>
</head>
<body>
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
                echo $this->Form->control('supplier_id', ['options' => $suppliers, 'empty' => true]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
        <br>
        <hr>
    </div>
</body>
</html>


