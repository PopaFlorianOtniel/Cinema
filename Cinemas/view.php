<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema $cinema
 */
?>
<main class="main-content">
    <div class="row">
        <div class="column-responsive column-80">
            <div class="container">
                <h3><?= h($cinema->name) ?></h3>
                <div class="page movie-list">
                    <?php foreach ($movies as $movie): ?>
                        <div class="movie">
                            <figure class="movie-poster">
                                <?= $this->Html->link($this->Html->image($movie->image, ['alt' => 'Movie']), ['controller' => 'Movies', 'action' => 'view', $movie->slug], ['escape'=>false])?>
                            </figure>
                            <div class="movie-title">
                                <?= $this->Html->link($movie->title, ['controller' => 'Movies', 'action' => 'view', $movie->slug]) ?>
                            </div>
                            <p><?= $this->Text->truncate($movie->description, 100)?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>
