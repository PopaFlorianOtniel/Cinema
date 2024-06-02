<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 * @var string[]|\Cake\Collection\CollectionInterface $cinemas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movie->slug],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movie->slug), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Movies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movies form content">
            <?= $this->Form->create($movie) ?>
            <fieldset>
                <legend><?= __('Edit Movie') ?></legend>
                <?php
                    echo $this->Form->control('cinema_id', ['options' => $cinemas]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('image', [
                        'type' => 'file', 'value' => $movie->image
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
