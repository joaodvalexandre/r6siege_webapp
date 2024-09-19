<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Weapons Controller
 *
 * @property \App\Model\Table\WeaponsTable $Weapons
 */
class WeaponsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Weapons->find();
        $weapons = $this->paginate($query);

        $this->set(compact('weapons'));
    }

    /**
     * View method
     *
     * @param string|null $id Weapon id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weapon = $this->Weapons->get($id, contain: ['Operators']);
        $this->set(compact('weapon'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weapon = $this->Weapons->newEmptyEntity();
        if ($this->request->is('post')) {
            $weapon = $this->Weapons->patchEntity($weapon, $this->request->getData());
            if ($this->Weapons->save($weapon)) {
                $this->Flash->success(__('The weapon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weapon could not be saved. Please, try again.'));
        }
        $operators = $this->Weapons->Operators->find('list', limit: 200)->all();
        $this->set(compact('weapon', 'operators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Weapon id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weapon = $this->Weapons->get($id, contain: ['Operators']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weapon = $this->Weapons->patchEntity($weapon, $this->request->getData());
            if ($this->Weapons->save($weapon)) {
                $this->Flash->success(__('The weapon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weapon could not be saved. Please, try again.'));
        }
        $operators = $this->Weapons->Operators->find('list', limit: 200)->all();
        $this->set(compact('weapon', 'operators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Weapon id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weapon = $this->Weapons->get($id);
        if ($this->Weapons->delete($weapon)) {
            $this->Flash->success(__('The weapon has been deleted.'));
        } else {
            $this->Flash->error(__('The weapon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
