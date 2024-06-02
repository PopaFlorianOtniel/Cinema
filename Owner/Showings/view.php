<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showing $showing
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Showing'), ['action' => 'edit', $showing->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Showing'), ['action' => 'delete', $showing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showing->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Showings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Showing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="showings view content">
            <h3><?= h($showing->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Movie') ?></th>
                    <td><?= $showing->has('movie') ? $this->Html->link($showing->movie->title, ['controller' => 'Movies', 'action' => 'view', $showing->movie->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= $showing->has('room') ? $this->Html->link($showing->room->id, ['controller' => 'Rooms', 'action' => 'view', $showing->room->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cinema') ?></th>
                    <td><?= $showing->has('cinema') ? $this->Html->link($showing->cinema->name, ['controller' => 'Cinemas', 'action' => 'view', $showing->cinema->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($showing->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Time') ?></th>
                    <td><?= h($showing->date_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($showing->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($showing->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
