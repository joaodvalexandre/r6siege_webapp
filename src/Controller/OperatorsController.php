<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Operators Controller
 *
 * @property \App\Model\Table\OperatorsTable $Operators
 */
class OperatorsController extends AppController
{
    public function index()
    {
        $resultset = $this->fetchTable('Operators')->find()->all();
        $this->set('data', $resultset);
    }

    public function view($id = null)
    {
        $operator = $this->Operators->get($id, contain: []);
        $this->set(compact('operator'));
    }

    public function add()
    {
        $operator = $this->Operators->newEmptyEntity();
        if ($this->request->is('post')) {
            $operator = $this->Operators->patchEntity($operator, $this->request->getData());
            if ($this->Operators->save($operator)) {
                $this->Flash->success(__('The operator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The operator could not be saved. Please, try again.'));
        }
        $this->set(compact('operator'));
    }

    public function edit($id = null)
    {
        $operator = $this->Operators->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $operator = $this->Operators->patchEntity($operator, $this->request->getData());
            if ($this->Operators->save($operator)) {
                $this->Flash->success(__('The operator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The operator could not be saved. Please, try again.'));
        }
        $this->set(compact('operator'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $operator = $this->Operators->get($id);
        if ($this->Operators->delete($operator)) {
            $this->Flash->success(__('The operator has been deleted.'));
        } else {
            $this->Flash->error(__('The operator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
