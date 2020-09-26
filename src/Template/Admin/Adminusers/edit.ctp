<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adminuser $adminuser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adminuser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adminuser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Adminusers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adminusers form large-9 medium-8 columns content">
    <?= $this->Form->create($adminuser) ?>
    <fieldset>
        <legend><?= __('Edit Adminuser') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
