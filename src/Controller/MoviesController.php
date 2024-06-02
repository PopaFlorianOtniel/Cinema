<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Movies Controller
 *
 * @property \App\Model\Table\MoviesTable $Movies
 * @method \App\Model\Entity\Movie[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MoviesController extends AppController
{
    /**
     * View method
     *
     * @param string|null $id Movie id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug)
    {
        $this->Authorization->skipAuthorization();
        $movie = $this->Movies
            ->findBySlug($slug)
            ->contain(['Showings'])
            ->firstOrFail();

        $this->set(compact('movie'));
    }
}
