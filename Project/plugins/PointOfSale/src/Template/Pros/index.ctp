<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $pros
 */
?>
<style>
    td{
        padding-left:40px;
        padding-top:10px;
    }
    th{
        padding-left:40px;
    }
    td{
        
    }
</style>
<div class="pros index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table w-100">
        <thead>
            <tr>
                <th scope="col" style=""><?= $this->Paginator->sort('image') ?></th>
                <th scope="col" style=""><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" style=""><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" style=""><?= $this->Paginator->sort('quantity') ?></th>
                
                <th scope="col" style=""><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col" style="" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pros as $pro): ?>
            <tr>
                <div style="margin-bottom:40px;">
                    <td style=""><?= $this->Html->image( $pro->image, ['border' => '0', 'data-src' => $pro->image, 'class' => 'img-responsive','style'=>'width:100px; height:50px; border-radius:5px;']); ?></td>

                    <td style=""><?= h($pro->name) ?></td>
                    <td style="">Rs:<?= $this->Number->format($pro->price)  ?>/-</td>
                    <td style=""><?= $this->Number->format($pro->quantity) ?></td>
                    <td style=""><?= $pro->has('category') ? $this->Html->link($pro->category->name, ['controller' => 'Categories', 'action' => 'view', $pro->category->id]) : '' ?></td>
                    <td class="actions" >
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pro->id)]) ?>
            </div> </td>
             

            
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
<hr>