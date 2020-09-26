<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adminuser $adminuser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adminuser'), ['action' => 'edit', $adminuser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adminuser'), ['action' => 'delete', $adminuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminuser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adminusers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adminuser'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminusers view large-9 medium-8 columns content">
    <h3><?= h($adminuser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($adminuser->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($adminuser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminuser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($adminuser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($adminuser->modified) ?></td>
        </tr>
    </table>
</div>
