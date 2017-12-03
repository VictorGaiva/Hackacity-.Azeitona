<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collaborator $collaborator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Collaborators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Workshops'), ['controller' => 'Workshops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Workshop'), ['controller' => 'Workshops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="collaborators form large-9 medium-8 columns content">
    <?= $this->Form->create($collaborator) ?>
    <fieldset>
        <legend><?= __('Add Collaborator') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
