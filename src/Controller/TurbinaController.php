<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Turbina Controller
 *
 * @property \App\Model\Table\TurbinaTable $Turbina
 *
 * @method \App\Model\Entity\Turbina[] paginate($object = null, array $settings = [])
 */
class TurbinaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $turbinas = $this->paginate($this->Turbina);

        $this->set(compact('turbinas'));
        $this->set('_serialize', ['turbinas']);
    }

    /**
     * View method
     *
     * @param string|null $id Turbina id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turbina = $this->Turbina->get($id, [
            'contain' => []
        ]);

        $this->set('turbina', $turbina);
        $this->set('_serialize', ['turbina']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turbina = $this->Turbina->newEntity();
        if ($this->request->is('post')) {
            $turbina = $this->Turbina->patchEntity($turbina, $this->request->getData());
            
            if ($this->Turbina->save($turbina)) {
                
                if (!empty($this->request->data['foto']['name'])) {
                    $file = $this->request->data['foto'];
                    
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . '/img/' . $turbina->id . '.jpg');
                }
                
                $this->Flash->success(__('Turbina guardada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turbina could not be saved. Please, try again.'));
        }
        $this->set(compact('turbina'));
        $this->set('_serialize', ['turbina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Turbina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turbina = $this->Turbina->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turbina = $this->Turbina->patchEntity($turbina, $this->request->getData());
            if ($this->Turbina->save($turbina)) {
                
                if (!empty($this->request->data['foto']['name'])) {
                    $file = $this->request->data['foto'];
                    
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . '/img/' . $turbina->id . '.jpg');
                }
                $this->Flash->success(__('Turbina guardada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turbina could not be saved. Please, try again.'));
        }
        $this->set(compact('turbina'));
        $this->set('_serialize', ['turbina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Turbina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turbina = $this->Turbina->get($id);
        if ($this->Turbina->delete($turbina)) {
            $this->Flash->success(__('The turbina has been deleted.'));
        } else {
            $this->Flash->error(__('The turbina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
