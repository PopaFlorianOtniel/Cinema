<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cinema> $cinemas
 */
?>
<div class="cinemas index content">
    <?= $this->Html->link(__('New Cinema'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cinemas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cinemas as $cinema): ?>
                <tr>
                    <td><?= $this->Number->format($cinema->id) ?></td>
                    <td><?= $cinema->has('user') ? $this->Html->link($cinema->user->name, ['controller' => 'Users', 'action' => 'view', $cinema->user->id]) : '' ?></td>
                    <td><?= h($cinema->name) ?></td>
                    <td><?= h($cinema->location) ?></td>
                    <td><?= h($cinema->created) ?></td>
                    <td><?= h($cinema->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cinema->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cinema->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cinema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cinema->id)]) ?>
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
