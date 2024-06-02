<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 * @var \Cake\Collection\CollectionInterface|string[] $cinemas
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="movies form content">
            <?= $this->Form->create($movie) ?>
            <fieldset>
                <legend><?= __('Add Movie') ?></legend>
                <?php
                    echo $this->Form->control('cinema_id', ['options' => $cinemas]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('image', [
                        'type' => 'file'
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
