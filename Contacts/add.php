<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="contacts form">
            <?= $this->Form->create($contact) ?>
            <fieldset>
                <legend><?= __('Contact') ?></legend>
                <h3>Phone: 0723333444</h3>
                <h3>Email: cinema.florian@gmail.com</h3>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('message');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Send Message')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
