<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movie'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movies view content">
            <h3><?= h($movie->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($movie->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($movie->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($movie->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($movie->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($movie->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Image') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($movie->image)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Showings') ?></h4>
                <?php if (!empty($movie->showings)) : ?>
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
                        <?php foreach ($movie->showings as $showings) : ?>
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
