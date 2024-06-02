<?php
declare(strict_types=1);

namespace App\Controller;

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
}
