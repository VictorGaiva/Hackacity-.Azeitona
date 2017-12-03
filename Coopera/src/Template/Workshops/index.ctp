<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workshop[]|\Cake\Collection\CollectionInterface $workshops
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Workshop'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collaborators'), ['controller' => 'Collaborators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collaborator'), ['controller' => 'Collaborators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Registrations'), ['controller' => 'Registrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Registration'), ['controller' => 'Registrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="workshops index large-9 medium-8 columns content">
    <h3><?= __('Workshops') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vagas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo_inscr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('collaborator_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($workshops as $workshop): ?>
            <tr>
                <td><?= $this->Number->format($workshop->id) ?></td>
                <td><?= h($workshop->nome) ?></td>
                <td><?= h($workshop->locar) ?></td>
                <td><?= $this->Number->format($workshop->vagas) ?></td>
                <td><?= h($workshop->descricao) ?></td>
                <td><?= h($workshop->periodo_inscr) ?></td>
                <td><?= $workshop->has('collaborator') ? $this->Html->link($workshop->collaborator->id, ['controller' => 'Collaborators', 'action' => 'view', $workshop->collaborator->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $workshop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $workshop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workshop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workshop->id)]) ?>
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
