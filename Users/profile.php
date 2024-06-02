<div class="row"></div>
    <div class="col-md-3">
        <h1 class="card-header">User Profile <?= h($user->name) ?></h1>
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit profile'), ['controller' => 'Users', 'action' => 'edit'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->name], ['confirm' => __('Are you sure you want to delete # {0}?', $user->name), 'class' => 'side-nav-item']) ?>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-block">
            <div class="users view">
                <table>
                    <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($user->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Username') ?></th>
                        <td><?= h($user->username) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                </table>
                <div class="text">
                    <strong><?= __('Role') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($user->role)); ?>
                    </blockquote>
                </div>
            
                <div class="related">
                    <h4><?= __('Your Reservations') ?></h4>
                    <?php if (!empty($user->reservations)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Showings') ?></th>
                                <th><?= __('Date') ?></th>
                            </tr>
                            <?php foreach ($user->reservations as $reservations) : ?>
                            <tr>
                                <td><?= h($reservations->showings_id) ?></td>
                                <td><?= h($reservations->created) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
</div>