<?php
namespace PointOfSale\Controller;

use PointOfSale\Controller\AppController;
use App\Model\Table\OrdersTable;
use App\Model\Table\ProsTable;

/**
 * OrderDetails Controller
 *
 * @property \PointOfSale\Model\Table\OrderDetailsTable $OrderDetails
 *
 * @method \PointOfSale\Model\Entity\OrderDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderDetailsController extends AppController
{

    public function initialize()
    {

        parent::initialize();
        
        $this->loadModel('Pros');
        $this->loadModel('Orders');

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pros'],
        ];
        $orderDetails = $this->paginate($this->OrderDetails);

        $this->set(compact('orderDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Order Detail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderDetail = $this->OrderDetails->get($id, [
            'contain' => ['Pros'],
        ]);

        $this->set('orderDetail', $orderDetail);
    }

    // This Function calls when a Product added to cart

    public function status($orderDetail){
        $status = 1;
        $orderDetail->status = $status;
        $this->OrderDetails->save($orderDetail);
        
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    public function add()
    {
        $count = 0;
        $total_price = 0;
        
        $orderDetail = $this->OrderDetails->newEntity();
        $orderDetails = $this->OrderDetails->find('all')->contain(
            ['Pros'
            ])->where(['status'=>1])->toArray();
            
        if ($this->request->is('post')) {

            $status = $this->status($orderDetail);
            
                
            
            
            $orderDetail = $this->OrderDetails->patchEntity($orderDetail, $this->request->getData());
            
            if ($this->OrderDetails->save($orderDetail)) {
                $this->qty($orderDetails);
                // $this->default_price($orderDetails);
                $this->Flash->success(__('The Product has been Added.'));

                return $this->redirect(['action' => 'add']);

            }
            $this->Flash->error(__('The product could not be added. Please, try again.'));
        }
        


        $count = $this->OrderDetails->find()->where(['status'=>1])->count();
        $pros = $this->OrderDetails->Pros->find('list', ['limit' => 200]);
        
        
        $total = $this->countAll();
        
        $this->set(compact('orderDetail', 'pros','orderDetails','count','total'));

    }

    // This function Counts the Remaining Quantity

    public function qty($orderDetails){
        $orderDetails = $this->OrderDetails->find()->where(['status'=>1])->last();

        $id = $orderDetails->pro_id;
        $qaun = $orderDetails->quantity;

        $quantity = 0;
        $pos = $this->Pros->find('all')->where(['id'=>$id]);

        foreach($pos as $po){
            $qan = $po->quantity;
            $quantity = $qan - $qaun;
            
            $po->quantity = $quantity;
                  
            $this->Pros->save($po);   
        }

    }

    // This function sets the default value of price if not given

    // public function default_price($orderDetails){
    //     $orderDetails = $this->OrderDetails->find()->where(['status'=>1])->last();
    //     $id = $orderDetails->pro_id;
        
    //         $prs = $this->Pros->find('all')->where(['id'=>$id]);
    //         foreach($prs as $pr){
    //             $orderDetails->price = $price;
    //             $this->OrderDetails->save($pr);
    //         }
        
    // }

    // This Function Counts all the Products Total which are added to Cart for Order

    public function countAll(){
       
        
        $total_price = 0;
        
        $orderDetails = $this->OrderDetails->find('all')->where(['status'=>1]);
        foreach($orderDetails as $orderDetail){
            
            $price = $orderDetail->price;
            $qty = $orderDetail->quantity;
            $total_price += $price * $qty;
            
        }   
        return $total_price;

    }

    // This Function calls when an Order has been Confirmed

    public function confirm(){
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The Order detail has been saved.'));

                return $this->redirect(['action' => 'confirm']);

            }
            $this->Flash->error(__('The Order  could not be saved. Please, try again.'));
        }

        $ord = $this->Orders->find()->last(); 
        $this->set_order($ord); 

        $this->reset_status($order);
        $orders = $this->Orders->find('all');
        
        $this->set('orders', $orders);
                    
    }

    // This function store the Id of Order into Order_details Table

    public function set_order($ord){
        $id = $ord->id;
        $orderDetails = $this->OrderDetails->find('all')->where(['status'=>1]);
        foreach($orderDetails as $orderDetail){
            $orderDetail->order_id = $id;
            $this->OrderDetails->save($orderDetail);
            
        }   
    }

    // This function find all the Products Related to Order
    public function selectAll($id){
        
        $orderDetails = $this->OrderDetails->find('all')->contain([
            'Pros' , 'Orders'
        ])->where(['order_id'=>$id])->toArray();
        
        $this->set('orderDetails', $orderDetails);
    }


    // This Function reset the cart_details values

    public function reset_status($order){
        $orderDetails = $this->OrderDetails->find('all')->where(['status'=>1]);
        foreach($orderDetails as $orderDetail){
            $status = 0;
            $orderDetail->status = $status;
            $this->OrderDetails->save($orderDetail);
            
        }   
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderDetail = $this->OrderDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderDetail = $this->OrderDetails->patchEntity($orderDetail, $this->request->getData());
            if ($this->OrderDetails->save($orderDetail)) {
                $this->Flash->success(__('The order detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order detail could not be saved. Please, try again.'));
        }
        $pros = $this->OrderDetails->Pros->find('list', ['limit' => 200]);
        $this->set(compact('orderDetail', 'pros'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order detail has been deleted.'));
        } else {
            $this->Flash->error(__('The order detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'confirm']);
    }
    public function del($id = null){
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'delete']);
        $this->qt($orderDetails);
        $orderDetail  = $this->OrderDetails->get($id);
        if($this->OrderDetails->delete($orderDetail)){

            $this->Flash->success(__("The Product has been Deleted"));
            return $this->redirect(['action' => 'add']);

        }else{
            $this->Flash->success(__("The Product could not be Deleted"));
        }
        
    }
    public function qt($orderDetails){
        $orderDetails = $this->OrderDetails->find()->where(['status'=>1])->last();

        $id = $orderDetails->pro_id;
        $qaun = $orderDetails->quantity;

        $quantity = 0;
        $pos = $this->Pros->find('all')->where(['id'=>$id]);

        foreach($pos as $po){
            $qan = $po->quantity;
            $quantity = $qan + $qaun;
            
            $po->quantity = $quantity;
            // print_r($po->quantity);       
            $this->Pros->save($po);   
        }

                 

        // exit;

    }

}
