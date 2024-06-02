<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showing $showing
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="showings view content">
            <h3><?= h($showing->movie->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Movie') ?></th>
                    <td><?= $showing->has('movie') ? $this->Html->link($showing->movie->title, ['controller' => 'Movies', 'action' => 'view', $showing->movie->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= $showing->has('room') ? $this->Html->link($showing->room->name, ['controller' => 'Rooms', 'action' => 'view', $showing->room->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cinema') ?></th>
                    <td><?= $showing->has('cinema') ? $this->Html->link($showing->cinema->name, ['controller' => 'Cinemas', 'action' => 'view', $showing->cinema->id]) : '' ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($showing->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Date Time') ?></th>
                    <td><?= h($showing->date_time) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($showing->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($showing->modified) ?></td>
                </tr> -->
            </table>
        </div>
    </div>
</div>
