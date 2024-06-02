<?php
declare(strict_types=1);

namespace App\Controller;

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
}
