<?php
namespace ShowProducts\Controller;

use ShowProducts\Controller\AppController;

/**
 * Products Controller
 *
 *
 * @method \ShowProducts\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);

        $this->set('product', $product);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());

                if ($this->Products->save($product)) { 

                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
            
        }
        $this->set(compact('product'));

        //This is image Code 
        /*if ($this->request->is('post')) {
            $target_dir = "/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            
            $fNAME   = $_FILES["image"]["name"];
            $TMPNAME = $_FILES['image']['tmp_name'];
        
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        
        
            $this->request->data['image']=$fNAME;
        
            $news=$this->News->newEntity();
            $news = $this->News->patchEntity($news, $this->request->data);
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));
                //return $this->redirect($this->referer()); 
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The news could not be saved. Please, try again.'));
            } 
        }*/

        //This is end

    
    }
    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
