<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Room'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rooms view content">
            <h3><?= h($room->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cinema') ?></th>
                    <td><?= $room->has('cinema') ? $this->Html->link($room->cinema->name, ['controller' => 'Cinemas', 'action' => 'view', $room->cinema->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($room->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seating') ?></th>
                    <td><?= h($room->seating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($room->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($room->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($room->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Showings') ?></h4>
                <?php if (!empty($room->showings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Movie Id') ?></th>
                            <th><?= __('Room Id') ?></th>
                            <th><?= __('Cinema Id') ?></th>
                            <th><?= __('Date Time') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($room->showings as $showings) : ?>
                        <tr>
                            <td><?= h($showings->id) ?></td>
                            <td><?= h($showings->movie_id) ?></td>
                            <td><?= h($showings->room_id) ?></td>
                            <td><?= h($showings->cinema_id) ?></td>
                            <td><?= h($showings->date_time) ?></td>
                            <td><?= h($showings->created) ?></td>
                            <td><?= h($showings->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Showings', 'action' => 'view', $showings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Showings', 'action' => 'edit', $showings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Showings', 'action' => 'delete', $showings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
