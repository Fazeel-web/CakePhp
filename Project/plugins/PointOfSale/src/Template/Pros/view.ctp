<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pro
 */
?>
    <?= __('Actions') ?><br><br>
        <button><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $pro->id]) ?> </button>
        <button><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $pro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pro->id)]) ?> </button>
        <button><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </button>
        <button><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </button>
        <button><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </button>
        <button><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </button>
        <button><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?> </button>
        <button><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?> </button>
<hr>
<div class="pros view large-9 medium-8 columns content">
    <h3 style="text-align:left;"><?= h($pro->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Name') ?></th>
            <td><?= h($pro->name) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Image') ?></th>
            <td><?= $this->Html->image( $pro->image, ['border' => '0', 'data-src' => $pro->image, 'class' => 'img-responsive','style'=>'width:240px; height:220px;']); ?> </td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Category') ?></th>
            <td><?= $pro->has('category') ? $this->Html->link($pro->category->name, ['controller' => 'Categories', 'action' => 'view', $pro->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Supplier') ?></th>
            <td><?= $pro->has('supplier') ? $this->Html->link($pro->supplier->name, ['controller' => 'Suppliers', 'action' => 'view', $pro->supplier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Price') ?></th>
            <td><?= $this->Number->format($pro->price) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-top:15px;"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($pro->quantity) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4 style="padding-top:15px;"><?= __('Description') ?></h4>
        <em><?= h($pro->description) ?> </em>
        <hr>
    </div>

    
    <br>
<hr>
</div>

