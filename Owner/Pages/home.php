<?= $this->Html->css(['style'])?>

<div id="site-content">
    <main class="main-content">
        <div class="container">
            <div class="page">
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
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="section-title">Users number</h2>
                    </div>
                    <div class="col-md-9">
                        <h2 class="section-title">Movies number</h2>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </main>
</div>
