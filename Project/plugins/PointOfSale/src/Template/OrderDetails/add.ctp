<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $orderDetail
 */
?>
<head>
<style>
    .iproduct{
        width: 45%;
        float:left;
    }
    .iprice{
        margin-left:50px;
    }
    .iprice, .iqty, .istatus{
        width:12%;
        float:left;
    }
    .iqty, .istatus{
        margin-left:48px;
    }
    .ibut, .itotalprice, .itotalpro, .iname, .iphone{
        float:right;
        margin-right:58px;
    }
    .ibut{
        margin-top:25px;
    }
    .idate{
        float:left;
        margin-left:40px;

    }
    .itable{
        width:50%;
        float:left;
    }
    .secondform{
        width:50%;
        float:right;
    }

</style>
</head>
<h4>Order Details</h4>
<div class="orderDetails form large-9 medium-8 columns content">
    
        <form action="/Project/point-of-sale/orderDetails/add" method="POST">

           <div class="iproduct">
            <?php echo $this->Form->control('pro_id', ['options' => $pros, 'empty' => false, 'label' => 'Products']); ?>
            </div>
            
            <div class="form-group text required iprice">
                <label for="price">Price</label>
                <input type="text" name="price"  id="price" class="form-control" placeholder="0" required>
            </div>
            <div class="form-group text required iqty">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity"  id="quantity" class="form-control" placeholder="0" required>
            </div>
            <!-- <div class="form-group text required istatus">
                <label for="status">Status</label>
                <input type="text" name="status" require="required" id="status" class="form-control"  placeholder="0 or 1">
            </div> -->
            
            <button type="submit" class="btn btn-secondary ibut">Add Product</button>
        </form>
        <hr>
        
        <table cellpadding="0" cellspacing="0" class="itable">
            <thead>
                <tr>
                   
                    <th scope="col"><?= $this->Paginator->sort('pro_id',['label'=>'Products']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                    <th scope="col" class="actions"><?= __('Remove Product') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderDetails as $orderDetail): ?>
                    
                <tr>
                    
                    <td><?= $orderDetail->has('pro') ? $this->Html->link($orderDetail->pro->name, ['controller' => 'Pros', 'action' => 'view', $orderDetail->pro->id]) : '' ?></td>
                    <td><?= h($orderDetail->price) ?></td>
                    <td><?= h($orderDetail->quantity) ?></td>
                    <td class="actions">
                    <i class="fa fa-trash">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'del', $orderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->id)]) ?>
                        </i>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="secondform">
            <form action="/Project/point-of-sale/orderDetails/confirm" method="POST">

                <div class="form-group text required iphone">
                    <label for="customername">Customer Phone</label>
                    <input type="text" name="customerPhone" id="customerphone" class="form-control" placeholder="12345678901" required>
                </div>
                <div class="form-group text required iname">
                    <label for="customername">Customer Name</label>
                    <input type="text" name="customerName" id="customername" class="form-control" placeholder="Enter Customer Name" required>
                </div>
                <div class="form-group text required itotalprice">
                    <label for="totalprice">Total</label>
                    <input type="text" name="totalprice" id="totalprice" class="form-control" placeholder="000" value=<?php echo $total ?> >
                </div>
                <div class="form-group text required itotalpro">
                    <label for="totalproducts">Total Products</label>
                    <input type="text" name="totalproducts" require="required" id="totalproducts" class="form-control" placeholder="Enter No of Products" value=<?php echo $count; ?>>
                </div>
                <br>
                <div class="form-group text required itotalpro">
                    <label for="grandtotal">Grand Total</label>
                    <input type="text" name="grandtotal" id="grandTotal" class="form-control" placeholder="000" required>
                </div>
                <div class="form-group text required itotalpro">
                    <label for="discount">Discount</label>
                    <input type="text" name="discount" require="required" id="discount" class="form-control" placeholder="00" required>
                </div>
                <div class="form-group date required idate">
                    <label for="date">Date</label>
                    <input type="date" name="created" require="required" id="created" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-secondary ibut">Submit</button>
            </form>
        </div>

</div>
