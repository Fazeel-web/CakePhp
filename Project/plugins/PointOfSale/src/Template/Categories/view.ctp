<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $category
 */
?>

<?= __('Actions') ?> <br><br>
        <button>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> 
        </button>
        <button>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
        </button>
        <button>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?>
        </button>
        <button>
            <?= $this->Html->link(__('New Category'), ['action' => 'add']) ?>
        </button>
        <button>
            <?= $this->Html->link(__('List Pros'), ['controller' => 'Pros', 'action' => 'index']) ?>
        </button>
        <button>
            <?= $this->Html->link(__('New Pro'), ['controller' => 'Pros', 'action' => 'add']) ?>
        </button>
        
        <hr>
<div class="categories view large-9 medium-8 columns content">
    <table class="vertical-table table w-100">
        <tr>
            <th scope="row" style="padding-top:15px;" class="col-sm-1"><?= __('Name') ?></th>
            <td style="padding-top:15px; margin-left:10px;"class="col-sm-11"><?= h($category->name) ?></td>
        </tr>
        <tr> 
            <th scope="row" style="padding-top:15px;" class="col-sm-1"><?= __('Description') ?></th>
            <td style="padding-top:15px; padding-left:15px;" class="col-sm-11"><?= h($category->description) ?></td>
        </tr>

    </table>
    <hr>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>

        <?php if (!empty($category->pros)): ?>
        <table cellpadding="0" cellspacing="0" class="table w-100">
            <tr>
                <th scope="col" style="padding-left:15px;"><?= __('Id') ?></th>
                <th scope="col" style="padding-left:15px;"><?= __('Name') ?></th>
                <th scope="col" style="padding-left:15px;"><?= __('Description') ?></th>
                <th scope="col" style="padding-left:15px;"><?= __('Price') ?></th>
                <th scope="col" style="padding-left:15px;"><?= __('Quantity') ?></th>
                <th scope="col" style="padding-left:15px;"><?= __('Image') ?></th>
                <th scope="col" style="padding-left:15px;"><?= __('Category Id') ?></th>
                <th scope="col" class="actions" style="padding-left:15px;"><?= __('Actions') ?></th>
            </tr>
            
            <?php foreach ($category->pros as $pros): ?>
                
            <tr>
            
                <td style="padding-top:15px; padding-left:15px; text-align:left;"><?= h($pros->id) ?></td>
                <td style="padding-top:15px; padding-left:15px; text-align:left;"><?= h($pros->name) ?></td>
                <td style="padding-top:15px; padding-left:15px; width:20%; text-align:left;"><?= h($pros->description) ?></td>
                <td style="padding-top:15px; padding-left:15px; text-align:left;"><?= h($pros->price) ?></td>
                <td style="padding-top:15px; padding-left:15px; text-align:left;"><?= h($pros->quantity) ?></td>
                <td style="padding-top:15px; padding-left:15px; text-align:left;"><?= h($pros->image) ?></td>
                <td style="padding-top:15px; padding-left:15px; text-align:left;"><?= h($pros->category_id) ?></td>
                <td class="actions" style="padding-top:15px; padding-left:15px; text-align:left;">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pros', 'action' => 'view', $pros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pros', 'action' => 'edit', $pros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pros', 'action' => 'delete', $pros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        
    </div>
</div>
<br><br>
<hr>