<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cinema> $cinemas
 */
?>
<div class="cinemas index content">
    <h3><?= __('Cinemas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cinemas as $cinema): ?>
                <tr>
                    <td>
                        <?= $this->Html->link($cinema->name, ['action' => 'view', $cinema->slug]) ?>
                    </td>
                    <td><?= h($cinema->location) ?></td>                    
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
