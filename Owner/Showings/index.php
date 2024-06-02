<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Showing> $showings
 */
?>
<div class="showings index content">
    <?= $this->Html->link(__('New Showing'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Showings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('movie_id') ?></th>
                    <th><?= $this->Paginator->sort('room_id') ?></th>
                    <th><?= $this->Paginator->sort('cinema_id') ?></th>
                    <th><?= $this->Paginator->sort('date_time') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($showings as $showing): ?>
                <tr>
                    <td><?= $this->Number->format($showing->id) ?></td>
                    <td><?= $showing->has('movie') ? $this->Html->link($showing->movie->title, ['controller' => 'Movies', 'action' => 'view', $showing->movie->id]) : '' ?></td>
                    <td><?= $showing->has('room') ? $this->Html->link($showing->room->id, ['controller' => 'Rooms', 'action' => 'view', $showing->room->id]) : '' ?></td>
                    <td><?= $showing->has('cinema') ? $this->Html->link($showing->cinema->name, ['controller' => 'Cinemas', 'action' => 'view', $showing->cinema->id]) : '' ?></td>
                    <td><?= h($showing->date_time) ?></td>
                    <td><?= h($showing->created) ?></td>
                    <td><?= h($showing->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $showing->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $showing->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $showing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showing->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
