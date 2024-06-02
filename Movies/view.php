<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>

<div id="site-content">
    <main class="main-content">
        <div class="container">
            <div class="breadcrumbs">
                <span><?= __('Movie Details') ?></span>
            </div>
            <?= $this->Html->link(__('Reserve now'), ['controller' => 'Reservations', 'action' => 'add'], ['class' => 'button float-right']) ?>
            <div class="text">
                <strong><?= __('Image') ?></strong>
                <blockquote>
                    <?= $this->Html->image(h($movie->image)); ?>
                </blockquote>
            </div>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($movie->title) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($movie->description)); ?>
                </blockquote>
            </div>
        </div> <!-- .container -->
    </main>
</div>
