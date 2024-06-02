<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema $cinema
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cinema'), ['action' => 'edit', $cinema->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cinema'), ['action' => 'delete', $cinema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cinema->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cinemas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cinema'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cinemas view content">
            <h3><?= h($cinema->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $cinema->has('user') ? $this->Html->link($cinema->user->name, ['controller' => 'Users', 'action' => 'view', $cinema->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($cinema->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cinema->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cinema->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cinema->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Location') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($cinema->location)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Rooms') ?></h4>
                <?php if (!empty($cinema->rooms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cinema Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Seating') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cinema->rooms as $rooms) : ?>
                        <tr>
                            <td><?= h($rooms->id) ?></td>
                            <td><?= h($rooms->cinema_id) ?></td>
                            <td><?= h($rooms->name) ?></td>
                            <td><?= h($rooms->seating) ?></td>
                            <td><?= h($rooms->created) ?></td>
                            <td><?= h($rooms->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Rooms', 'action' => 'view', $rooms->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Rooms', 'action' => 'edit', $rooms->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rooms', 'action' => 'delete', $rooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rooms->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Showings') ?></h4>
                <?php if (!empty($cinema->showings)) : ?>
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
                        <?php foreach ($cinema->showings as $showings) : ?>
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
