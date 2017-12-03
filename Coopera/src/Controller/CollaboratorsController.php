<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Collaborators Controller
 *
 * @property \App\Model\Table\CollaboratorsTable $Collaborators
 *
 * @method \App\Model\Entity\Collaborator[] paginate($object = null, array $settings = [])
 */
class CollaboratorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $collaborators = $this->paginate($this->Collaborators);

        $this->set(compact('collaborators'));
        $this->set('_serialize', ['collaborators']);
    }

    /**
     * View method
     *
     * @param string|null $id Collaborator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collaborator = $this->Collaborators->get($id, [
            'contain' => ['Workshops']
        ]);

        $this->set('collaborator', $collaborator);
        $this->set('_serialize', ['collaborator']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collaborator = $this->Collaborators->newEntity();
        if ($this->request->is('post')) {
            $collaborator = $this->Collaborators->patchEntity($collaborator, $this->request->getData());
            if ($this->Collaborators->save($collaborator)) {
                $this->Flash->success(__('The collaborator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collaborator could not be saved. Please, try again.'));
        }
        $this->set(compact('collaborator'));
        $this->set('_serialize', ['collaborator']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Collaborator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collaborator = $this->Collaborators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collaborator = $this->Collaborators->patchEntity($collaborator, $this->request->getData());
            if ($this->Collaborators->save($collaborator)) {
                $this->Flash->success(__('The collaborator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collaborator could not be saved. Please, try again.'));
        }
        $this->set(compact('collaborator'));
        $this->set('_serialize', ['collaborator']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Collaborator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collaborator = $this->Collaborators->get($id);
        if ($this->Collaborators->delete($collaborator)) {
            $this->Flash->success(__('The collaborator has been deleted.'));
        } else {
            $this->Flash->error(__('The collaborator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
