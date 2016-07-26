<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Banks Controller
 *
 * @property \App\Model\Table\BanksTable $Banks
 */
class BanksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $banks = $this->paginate($this->Banks);

        $this->set(compact('banks'));
        $this->set('_serialize', ['banks']);
    }

    /**
     * View method
     *
     * @param string|null $id Bank id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bank = $this->Banks->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('bank', $bank);
        $this->set('_serialize', ['bank']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bank = $this->Banks->newEntity();
        if ($this->request->is('post')) {
            $bank = $this->Banks->patchEntity($bank, $this->request->data);
            if ($this->Banks->save($bank)) {
                $this->Flash->success(__('The bank has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bank could not be saved. Please, try again.'));
            }
        }
        $users = $this->Banks->Users->find('list', ['limit' => 200]);
        $this->set(compact('bank', 'users'));
        $this->set('_serialize', ['bank']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bank id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bank = $this->Banks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bank = $this->Banks->patchEntity($bank, $this->request->data);
            if ($this->Banks->save($bank)) {
                $this->Flash->success(__('The bank has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bank could not be saved. Please, try again.'));
            }
        }
        $users = $this->Banks->Users->find('list', ['limit' => 200]);
        $this->set(compact('bank', 'users'));
        $this->set('_serialize', ['bank']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bank id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bank = $this->Banks->get($id);
        if ($this->Banks->delete($bank)) {
            $this->Flash->success(__('The bank has been deleted.'));
        } else {
            $this->Flash->error(__('The bank could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
