<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collaborator[]|\Cake\Collection\CollectionInterface $collaborators
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Collaborator'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Workshops'), ['controller' => 'Workshops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Workshop'), ['controller' => 'Workshops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="collaborators index large-9 medium-8 columns content">
    <h3><?= __('Collaborators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($collaborators as $collaborator): ?>
            <tr>
                <td><?= $this->Number->format($collaborator->id) ?></td>
                <td><?= h($collaborator->nome) ?></td>
                <td><?= h($collaborator->telefone) ?></td>
                <td><?= h($collaborator->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $collaborator->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $collaborator->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $collaborator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collaborator->id)]) ?>
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
