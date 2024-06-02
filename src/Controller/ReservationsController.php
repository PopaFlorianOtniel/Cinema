<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use PhpParser\Node\Expr\AssignOp\Concat;

/**
 * Reservations Controller
 *
 * @property \App\Model\Table\ReservationsTable $Reservations
 * @method \App\Model\Entity\Reservation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReservationsController extends AppController
{
    use MailerAwareTrait;
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reservation = $this->Reservations->newEmptyEntity();

        $this->Authorization->skipAuthorization();
        
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['user_id'] = $this->request->getAttribute('identity')->getIdentifier();

            $reservation = $this->Reservations->patchEntity($reservation, $data);
            
            if ($this->Reservations->save($reservation)) {
                $mailer = new Mailer('default');
                $mailer->setEmailFormat('html')
                    ->setFrom(['florian.popa@green-designs.ro' => 'Cinema'])
                    ->setCc('popaflorianotniel@gmail.com')
                    ->setTo('otnielvoleibalistu@gmail.com')
                    ->setSubject('Confirm reservation')
                    ->viewBuilder()
                        ->setTemplate('confirm_email')
                        ->setLayout('default');
                $mailer->deliver();

                $this->Flash->success(__('The reservation has been saved and confirmation send to email.'));
                
                return $this->redirect(['controller' => 'Pages', 'action' => 'home']);
            }
            $this->Flash->error(__('The reservation could not be saved. Please, try again.'));
        }
        
        $programs = [];
        $showings = $this->Reservations->Showings
            ->find()
            ->select(['Movies.title', 'Showings.date_time', 'Showings.id'])
            ->contain('Movies')
            ->all();

        foreach($showings as $showing) {
            $programs[$showing->id] = $showing->movie->title.' | '.$showing->date_time;
        }
        
        $this->set(compact('reservation', 'showings', 'programs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reservation = $this->Reservations->get($id, [
            'contain' => [],
        ]);

        $this->Authorization->skipAuthorization();
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['user_id'] = $this->request->getAttribute('identity')->getIdentifier();

            $reservation = $this->Reservations->patchEntity($reservation, $data);
            if ($this->Reservations->save($reservation)) {
                $this->Flash->success(__('The reservation has been saved.'));

                return $this->redirect(['controller' => 'Pages', 'action' => 'home']);
            }
            $this->Flash->error(__('The reservation could not be saved. Please, try again.'));
        }

        $showings = $this->Reservations->Showings->find('list', ['limit' => 200])->all();

        $this->set(compact('reservation', 'showings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reservation = $this->Reservations->get($id);
        if ($this->Reservations->delete($reservation)) {
            $this->Flash->success(__('The reservation has been deleted.'));
        } else {
            $this->Flash->error(__('The reservation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'Pages', 'action' => 'home']);
    }
}
