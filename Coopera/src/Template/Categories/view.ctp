<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Workshop'), ['controller' => 'CategoryWorkshop', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($category->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Category Workshop') ?></h4>
        <?php if (!empty($category->category_workshop)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Workshop Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->category_workshop as $categoryWorkshop): ?>
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
</div>
