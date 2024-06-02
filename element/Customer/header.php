<header class="site-header">
    <div class="container">
        <a id="branding">
            <!-- <?= $this->Html->link($this->Html->image('logo.png', ['alt' => '']), '/', ['escape' => false])?> -->
            <?= $this->Html->image('logo.png', ['alt' => ''])?>
            <div class="logo-copy">
                <h1 class="site-title">Cinema</h1>
                <small class="site-description">by Florian</small>
            </div>
        </a> <!-- #branding -->

        <div class="main-navigation">
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <ul class="menu">
                <li class="menu-item"><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => '/home'])?></li>
                <li class="menu-item"><?= $this->Html->link('Movie', ['controller' => 'Movies', 'action' => '/index'])?></li>
                <div class="dropdown">
                    <button class="dropbtn">Cinema
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <li class="menu-item"><?= $this->Html->link('Cinema Prima', 'customer/cinemas/view/cinema_prima', ['action' => '/home'])?></li>
                        <li class="menu-item"><?= $this->Html->link('Cinema Palace', 'customer/cinemas/view/cinema_palace', ['action' => '/home'])?></li>
                    </div>
                </div> 
                <li class="menu-item"><?= $this->Html->link('Contact', ['controller' => 'Contacts', 'action' => '/index'])?></li>
                <li class="menu-item"><?= $this->Html->link('Join us', ['controller' => 'Users', 'action' => '/index'])?></li>
                <li class="menu-item"><?= $this->Html->link('Log out', '/users/logout', ['action' => '/home'])?></li>
            </ul> <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
    </div>
</header>
