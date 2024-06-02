<?php
declare(strict_types=1);

namespace App\Controller\Owner;

use App\Controller\AppController;

/**
 * Showings Controller
 *
 * @property \App\Model\Table\ShowingsTable $Showings
 * @method \App\Model\Entity\Showing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShowingsController extends AppController
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
            'contain' => ['Movies', 'Rooms', 'Cinemas'],
        ];
        $showings = $this->paginate($this->Showings);

        $this->set(compact('showings'));
    }

    /**
     * View method
     *
     * @param string|null $id Showing id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $showing = $this->Showings->get($id, [
            'contain' => ['Movies', 'Rooms', 'Cinemas'],
        ]);

        $this->set(compact('showing'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $showing = $this->Showings->newEmptyEntity();
        if ($this->request->is('post')) {
            $showing = $this->Showings->patchEntity($showing, $this->request->getData());
            if ($this->Showings->save($showing)) {
                $this->Flash->success(__('The showing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The showing could not be saved. Please, try again.'));
        }
        $movies = $this->Showings->Movies->find('list', ['limit' => 200])->all();
        $rooms = $this->Showings->Rooms->find('list', ['limit' => 200])->all();
        $cinemas = $this->Showings->Cinemas->find('list', ['limit' => 200])->all();
        $this->set(compact('showing', 'movies', 'rooms', 'cinemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Showing id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $showing = $this->Showings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $showing = $this->Showings->patchEntity($showing, $this->request->getData());
            if ($this->Showings->save($showing)) {
                $this->Flash->success(__('The showing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The showing could not be saved. Please, try again.'));
        }
        $movies = $this->Showings->Movies->find('list', ['limit' => 200])->all();
        $rooms = $this->Showings->Rooms->find('list', ['limit' => 200])->all();
        $cinemas = $this->Showings->Cinemas->find('list', ['limit' => 200])->all();
        $this->set(compact('showing', 'movies', 'rooms', 'cinemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Showing id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $showing = $this->Showings->get($id);
        if ($this->Showings->delete($showing)) {
            $this->Flash->success(__('The showing has been deleted.'));
        } else {
            $this->Flash->error(__('The showing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
