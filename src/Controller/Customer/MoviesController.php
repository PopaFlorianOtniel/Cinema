<?php
declare(strict_types=1);

namespace App\Controller\Customer;

use App\Controller\AppController;

/**
 * Movies Controller
 *
 * @property \App\Model\Table\MoviesTable $Movies
 * @method \App\Model\Entity\Movie[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MoviesController extends AppController
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
            'contain' => ['Cinemas'],
        ];
        $movies = $this->paginate($this->Movies);

        $this->set(compact('movies'));
    }

    /**
     * View method
     *
     * @param string|null $slug Movie slug.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug)
    {
        $this->Authorization->skipAuthorization();
        
        $movie = $this->Movies->find()
            ->where(['slug' => $slug])
            ->first();

        $this->set(compact('movie'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        
        $movie = $this->Movies->newEmptyEntity();
        if ($this->request->is('post')) {
            $movie = $this->Movies->patchEntity($movie, $this->request->getData());
            $movie->user_id = $this->request->getAttribute('identity')->getIdentifier();

            if ($this->Movies->save($movie)) {
                $this->Flash->success(__('The movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie could not be saved. Please, try again.'));
        }
        
        $cinemas = $this->Movies->Cinemas->find('list', ['limit' => 200])->all();
        $this->set(compact('movie', 'cinemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Movie id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($slug)
    {
        $movie = $this->Movies
            ->findBySlug($slug)
            ->firstOrFail();

        $this->Authorization->authorize($movie);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movie = $this->Movies->patchEntity($movie, $this->request->getData(), [
                'accessibleFields' => ['user_id' => false]
            ]);

            if ($this->Movies->save($movie)) {
                $this->Flash->success(__('The movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie could not be saved. Please, try again.'));
        }

        $cinemas = $this->Movies->Cinemas->find('list', ['limit' => 200])->all();
        $this->set(compact('movie', 'cinemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Movie id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movie = $this->Movies
            ->findBySlug($slug)
            ->firstOrFail();
        
        $this->Authorization->authorize($movie);

        if ($this->Movies->delete($movie)) {
            $this->Flash->success(__('The movie has been deleted.'));
        } else {
            $this->Flash->error(__('The movie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
