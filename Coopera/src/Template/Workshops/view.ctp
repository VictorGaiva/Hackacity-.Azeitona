<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workshop $workshop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Workshop'), ['action' => 'edit', $workshop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Workshop'), ['action' => 'delete', $workshop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workshop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Workshops'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Workshop'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collaborators'), ['controller' => 'Collaborators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collaborator'), ['controller' => 'Collaborators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Registrations'), ['controller' => 'Registrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registration'), ['controller' => 'Registrations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="workshops view large-9 medium-8 columns content">
    <h3><?= h($workshop->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($workshop->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locar') ?></th>
            <td><?= h($workshop->locar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($workshop->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo Inscr') ?></th>
            <td><?= h($workshop->periodo_inscr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collaborator') ?></th>
            <td><?= $workshop->has('collaborator') ? $this->Html->link($workshop->collaborator->id, ['controller' => 'Collaborators', 'action' => 'view', $workshop->collaborator->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($workshop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vagas') ?></th>
            <td><?= $this->Number->format($workshop->vagas) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Category Workshop') ?></h4>
        <?php if (!empty($workshop->category_workshop)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Workshop Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($workshop->category_workshop as $categoryWorkshop): ?>
            <tr>
                <td><?= h($categoryWorkshop->workshop_id) ?></td>
                <td><?= h($categoryWorkshop->category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CategoryWorkshop', 'action' => 'view', $categoryWorkshop->workshop_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CategoryWorkshop', 'action' => 'edit', $categoryWorkshop->workshop_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CategoryWorkshop', 'action' => 'delete', $categoryWorkshop->workshop_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryWorkshop->workshop_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Registrations') ?></h4>
        <?php if (!empty($workshop->registrations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Flag') ?></th>
                <th scope="col"><?= __('Schedule Id') ?></th>
                <th scope="col"><?= __('Workshop Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($workshop->registrations as $registrations): ?>
            <tr>
                <td><?= h($registrations->id) ?></td>
                <td><?= h($registrations->nome) ?></td>
                <td><?= h($registrations->flag) ?></td>
                <td><?= h($registrations->schedule_id) ?></td>
                <td><?= h($registrations->workshop_id) ?></td>
                <td><?= h($registrations->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Registrations', 'action' => 'view', $registrations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Registrations', 'action' => 'edit', $registrations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registrations', 'action' => 'delete', $registrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
