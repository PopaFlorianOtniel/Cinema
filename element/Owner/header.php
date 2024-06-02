<div id="site-content">
    <header class="site-header">
        <div class="sidebar">
            <div class="container">
                <a id="branding">
                    <!-- <?= $this->Html->link($this->Html->image('logo.png', ['alt' => '']), '/', ['escape' => false])?> -->
                    <?= $this->Html->image('logo.png', ['alt' => ''])?>
                    <div class="logo-copy">
                        <h1 class="site-title" style="color: black">Cinema</h1>
                        <small class="site-description" style="color: black">by Florian</small>
                    </div>
                </a> <!-- #branding -->
            </div>
            <?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => '/home'])?>
            <?= $this->Html->link(__('Contact'), ['controller' => 'Contacts', 'action' => '/index'])?>
            <?= $this->Html->link(__('Cinema'), ['controller' => 'Cinemas', 'action' => '/index'])?>
            <?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => '/index'])?>
            <?= $this->Html->link(__('Log out'), '/owner/users/logout', ['action' => '/home'])?>
        </div>
    </header>
</div>