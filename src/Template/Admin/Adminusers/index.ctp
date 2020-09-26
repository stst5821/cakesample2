<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adminuser[]|\Cake\Collection\CollectionInterface $adminusers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Adminuser'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminusers index large-9 medium-8 columns content">
    <h3><?= __('Adminusers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminusers as $adminuser): ?>
            <tr>
                <td><?= $this->Number->format($adminuser->id) ?></td>
                <td><?= h($adminuser->username) ?></td>
                <td><?= h($adminuser->password) ?></td>
                <td><?= h($adminuser->created) ?></td>
                <td><?= h($adminuser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adminuser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adminuser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminuser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
