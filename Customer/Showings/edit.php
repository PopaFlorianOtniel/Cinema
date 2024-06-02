<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showing $showing
 * @var string[]|\Cake\Collection\CollectionInterface $movies
 * @var string[]|\Cake\Collection\CollectionInterface $rooms
 * @var string[]|\Cake\Collection\CollectionInterface $cinemas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $showing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $showing->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Showings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="showings form content">
            <?= $this->Form->create($showing) ?>
            <fieldset>
                <legend><?= __('Edit Showing') ?></legend>
                <?php
                    echo $this->Form->control('movie_id', ['options' => $movies]);
                    echo $this->Form->control('room_id', ['options' => $rooms]);
                    echo $this->Form->control('cinema_id', ['options' => $cinemas]);
                    echo $this->Form->control('date_time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
