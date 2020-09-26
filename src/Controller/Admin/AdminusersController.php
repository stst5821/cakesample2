<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Core\Configure;

class AdminusersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $adminusers = $this->paginate($this->Adminusers);

        $this->set(compact('adminusers'));
    }

    /**
     * View method
     *
     * @param string|null $id Adminuser id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminuser = $this->Adminusers->get($id, [
            'contain' => [],
        ]);

        $this->set('adminuser', $adminuser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminuser = $this->Adminusers->newEntity();
        if ($this->request->is('post')) {
            $adminuser = $this->Adminusers->patchEntity($adminuser, $this->request->getData());
            if ($this->Adminusers->save($adminuser)) {
                $this->Flash->success(__('The adminuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adminuser could not be saved. Please, try again.'));
        }
        $this->set(compact('adminuser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Adminuser id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminuser = $this->Adminusers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminuser = $this->Adminusers->patchEntity($adminuser, $this->request->getData());
            if ($this->Adminusers->save($adminuser)) {
                $this->Flash->success(__('The adminuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adminuser could not be saved. Please, try again.'));
        }
        $this->set(compact('adminuser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Adminuser id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminuser = $this->Adminusers->get($id);
        if ($this->Adminusers->delete($adminuser)) {
            $this->Flash->success(__('The adminuser has been deleted.'));
        } else {
            $this->Flash->error(__('The adminuser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $Adminuser = $this->Auth->identify();
            if ($Adminuser) {
                $this->Auth->setUser($Adminuser);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}