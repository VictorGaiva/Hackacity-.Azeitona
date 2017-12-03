<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workshop $workshop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $workshop->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $workshop->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Workshops'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Collaborators'), ['controller' => 'Collaborators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collaborator'), ['controller' => 'Collaborators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Registrations'), ['controller' => 'Registrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Registration'), ['controller' => 'Registrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="workshops form large-9 medium-8 columns content">
    <?= $this->Form->create($workshop) ?>
    <fieldset>
        <legend><?= __('Edit Workshop') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('locar');
            echo $this->Form->control('vagas');
            echo $this->Form->control('descricao');
            echo $this->Form->control('periodo_inscr');
            echo $this->Form->control('collaborator_id', ['options' => $collaborators, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
