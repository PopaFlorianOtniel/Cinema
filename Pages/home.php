<?= $this->Html->css(['style'])?>

<div id="site-content">
    <main class="main-content">
        <div class="container">
            <div class="page">
                <div class="row">
                    <div class="col-md-9">
                        <div class="latest-movie">
                            <?= $this->Html->link($this->Html->image('cinema.jpg', ['alt' => 'Cinema 1']), 'cinemas/view/cinema_prima', ['escape' => false])?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2><?= $this->Html->link('Cinema Prima', 'cinemas/view/cinema_prima', ['action' => 'cinemas']) ?></h2>
                        <h3>Location: Bulevardul Decebal 61A, Oradea, Bihor, Romania</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="latest-movie">
                            <?= $this->Html->link($this->Html->image('cinema1.jpg', ['alt' => 'Cinema 2']), 'cinemas/view/cinema_palace', ['escape' => false])?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2><?= $this->Html->link('Cinema Palace', 'cinemas/view/cinema_palace', ['action' => 'cinemas']) ?></h2>
                        <h3>Location: Str. Nufărului 30, Oradea, Bihor, Romania</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="section-title">Cinema Palace</h2>
                        <p>Movie show</p>
                        <ul class="movie-schedule">
                            <li>
                                <div class="date">16/08</div>
                                <h2 class="entry-title"><?= $this->Html->link('Mission Impossible', 'movies/view/mission_impossible', ['action' => '/home'])?></li></h2>
                            </li>
                            <li>
                                <div class="date">17/08</div>
                                <h2 class="entry-title"><?= $this->Html->link('Fast X', 'movies/view/fast_x', ['action' => '/home'])?></li></h2>
                            </li>
                            <li>
                                <div class="date">20/08</div>
                                <h2 class="entry-title"><?= $this->Html->link('Spencer', 'movies/view/spencer', ['action' => '/home'])?></li></h2>
                            </li>
                            <li>
                                <div class="date">23/08</div>
                                <h2 class="entry-title"><?= $this->Html->link('Oppenheimer', 'movies/view/oppenheimer', ['action' => '/home'])?></li></h2>
                            </li>
                        </ul> <!-- .movie-schedule -->
                    </div>
                    <div class="col-md-9">
                        <h2 class="section-title">Cinema Prima</h2>
                        <p>Movie show</p>
                        <ul class="movie-schedule">
                            <li>
                                <div class="date">16/08</div>
                                <h2 class="entry-title"><?= $this->Html->link('Mission Impossible', 'movies/view/mission_impossible', ['action' => '/home'])?></li></h2>
                            </li>
                            <li>
                                <div class="date">18/08</div>
                                <h2 class="entry-title"><?= $this->Html->link('Fast X', 'movies/view/fast_x', ['action' => '/home'])?></li></h2>
                            </li>
                            <li>
                                <div class="date">01/09</div>
                                <h2 class="entry-title"><?= $this->Html->link('Spencer', 'movies/view/spencer', ['action' => '/home'])?></li></h2>
                            </li>
                            <li>
                                <div class="date">04/09</div>
                                <h2 class="entry-title"><?= $this->Html->link('Oppenheimer', 'movies/view/oppenheimer', ['action' => '/home'])?></li></h2>
                            </li>
                        </ul> <!-- .movie-schedule -->
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </main>
</div>
