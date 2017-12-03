<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collaborator $collaborator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Collaborator'), ['action' => 'edit', $collaborator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Collaborator'), ['action' => 'delete', $collaborator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collaborator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Collaborators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collaborator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Workshops'), ['controller' => 'Workshops', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Workshop'), ['controller' => 'Workshops', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="collaborators view large-9 medium-8 columns content">
    <h3><?= h($collaborator->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($collaborator->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($collaborator->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($collaborator->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($collaborator->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Workshops') ?></h4>
        <?php if (!empty($collaborator->workshops)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Locar') ?></th>
                <th scope="col"><?= __('Vagas') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Periodo Inscr') ?></th>
                <th scope="col"><?= __('Collaborator Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($collaborator->workshops as $workshops): ?>
            <tr>
                <td><?= h($workshops->id) ?></td>
                <td><?= h($workshops->nome) ?></td>
                <td><?= h($workshops->locar) ?></td>
                <td><?= h($workshops->vagas) ?></td>
                <td><?= h($workshops->descricao) ?></td>
                <td><?= h($workshops->periodo_inscr) ?></td>
                <td><?= h($workshops->collaborator_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Workshops', 'action' => 'view', $workshops->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Workshops', 'action' => 'edit', $workshops->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Workshops', 'action' => 'delete', $workshops->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workshops->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
