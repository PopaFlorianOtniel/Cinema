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
                <li class="menu-item"><?= $this->Html->link('Home', '/', ['action' => '/home'])?></li>
                <div class="menu-item dropdown">
                    <button class="dropbtn">Movie
                        <!-- <i class="fa fa-caret-down"></i> -->
                    </button>
                    <div class="dropdown-content">
                        <li class="menu-item dropdown-item"><?= $this->Html->link('Cinema Prima', '/cinemas/view/cinema_prima', ['action' => '/home'])?></li>
                        <li class="menu-item dropdown-item"><?= $this->Html->link('Cinema Palace', '/cinemas/view/cinema_palace', ['action' => '/home'])?></li>
                    </div>
                </div> 
                <li class="menu-item"><?= $this->Html->link('Contact', ['controller' => 'Contacts', 'action' => '/add'])?></li>
                <li class="menu-item"><?= $this->Html->link('Join us', ['controller' => 'Users', 'action' => '/add'])?></li>
                <div class="menu-item dropdown">
                    <button class="dropbtn">Profile
                        <!-- <i class="fa fa-caret-down"></i> -->
                    </button>
                    <div class="dropdown-content">
                        <li class="menu-item"><?= $this->Html->link('View Profile', '/users/profile', ['action' => '/home'])?></li>
                        <li class="menu-item"><?= $this->Html->link('Log out', ['controller' => 'Users', 'action' => '/logout'])?></li>
                    </div>
                </div> 
                
            </ul> <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
    </div>
</header>
