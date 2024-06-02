<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Movie> $movies
 */
?>
<div class="movies index content">
    <?= $this->Html->link(__('New Movie'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movies') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cinema_id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $movie): ?>
                <tr>
                    <td><?= $movie->has('cinema') ? $this->Html->link($movie->cinema->name, ['controller' => 'Cinemas', 'action' => 'view', $movie->cinema->slug]) : '' ?></td>
                    <td><?= ($movie->title) ?></td>
                    <td><?= $this->Text->truncate($movie->description, 50)?></td>
                    <td><?= ($movie->image) ?></td>
                    <td><?= ($movie->created) ?></td>
                    <td><?= ($movie->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movie->slug]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movie->slug]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movie->slug], ['confirm' => __('Are you sure you want to delete?', $movie->slug)]) ?>
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
