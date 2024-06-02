<?php
declare(strict_types=1);

namespace App\Controller\Customer;

use App\Controller\AppController;

/**
 * Cinemas Controller
 *
 * @property \App\Model\Table\CinemasTable $Cinemas
 * @method \App\Model\Entity\Cinema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CinemasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $cinemas = $this->paginate($this->Cinemas);

        $this->set(compact('cinemas'));
    }

    /**
     * View method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug)
    {
        $this->Authorization->skipAuthorization();
        $cinema = $this->Cinemas
        ->findBySlug($slug)
        ->contain(['Users', 'Movies', 'Rooms', 'Showings'])
        ->firstOrFail();

        // dd($cinema);
    $movies = $this->Cinemas->Movies->getMovies($cinema->id);
    $this->set(compact('cinema', 'movies'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cinema = $this->Cinemas->newEmptyEntity();

        $this->Authorization->skipAuthorization();

        if ($this->request->is('post')) {
            $cinema = $this->Cinemas->patchEntity($cinema, $this->request->getData());
            if ($this->Cinemas->save($cinema)) {
                $this->Flash->success(__('The cinema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cinema could not be saved. Please, try again.'));
        }
        $users = $this->Cinemas->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('cinema', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($slug)
    {
        $cinema = $this->Cinemas 
            ->findBySlug($slug)
            ->firstOrFail();

        $this->Authorization->skipAuthorization();
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cinema = $this->Cinemas->patchEntity($cinema, $this->request->getData());
            if ($this->Cinemas->save($cinema)) {
                $this->Flash->success(__('The cinema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cinema could not be saved. Please, try again.'));
        }
        $users = $this->Cinemas->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('cinema', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cinema = $this->Cinemas
            ->findBySlug($slug)
            ->firstOrFail();
        if ($this->Cinemas->delete($cinema)) {
            $this->Flash->success(__('The cinema has been deleted.'));
        } else {
            $this->Flash->error(__('The cinema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
