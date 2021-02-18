<?php
namespace PointOfSale\Controller;

use PointOfSale\Controller\AppController;
use App\Model\Table\CategoriesTable;
use App\Model\Table\SuppliersTable;

/**
 * Pros Controller
 *
 * @property \PointOfSale\Model\Table\ProsTable $Pros
 *
 * @method \PointOfSale\Model\Entity\Pro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProsController extends AppController
{

    public function initialize()
    {

        parent::initialize();
        
        $this->loadModel('Categories');
        $this->loadModel('Suppliers');

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $pros = $this->paginate($this->Pros);

        $this->set(compact('pros'));
    }

    /**
     * View method
     *
     * @param string|null $id Pro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pro = $this->Pros->get($id, [
            'contain' => ['Categories', 'Suppliers'],
        ]);

        $this->set('pro', $pro);
        
    }

    private function uploadImage($pro)
    {
        $file = $this->getRequest()->getData('file');

        if (!empty($file['name'])) {
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
            $arr_ext = array('jpg', 'jpeg', 'gif', 'png');

            $uploadPath = "img/";
        
            if (in_array($ext, $arr_ext)) {
 
                $result = move_uploaded_file($file['tmp_name'], WWW_ROOT . $uploadPath . $file['name']);

                $pro->image = $file['name'];
                
                $this->Pros->save($pro);
                $response = [
                    'message' => $file['name'],
                ];
                
            } else {
                $response = ['status' => false, 'message' => 'Selected extension not allowed.'];
            }
        } else {
            $response = ['status' => true];
        }
        return $response;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $pro = $this->Pros->newEntity();
        $result = $this->uploadImage($pro);
        if ($this->request->is('post')) {
            $pro = $this->Pros->patchEntity($pro, $this->request->getData());
            if ($this->Pros->save($pro)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $categories = $this->Pros->Categories->find('list', ['limit' => 200]);
        $suppliers = $this->Pros->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('pro', 'categories','suppliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pro = $this->Pros->get($id, [
            'contain' => [],
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pro = $this->Pros->patchEntity($pro, $this->request->getData());
            $result = $this->uploadImage($pro);
            if ($this->Pros->save($pro)) {
                $this->Flash->success(__('The pro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pro could not be saved. Please, try again.'));
        }
        $categories = $this->Pros->Categories->find('list', ['limit' => 200]);
        $suppliers = $this->Pros->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('pro', 'categories','suppliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pro = $this->Pros->get($id);
        if ($this->Pros->delete($pro)) {
            $this->Flash->success(__('The pro has been deleted.'));
        } else {
            $this->Flash->error(__('The pro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
