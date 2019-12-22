<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<?php
$this->start('tb_actions');
?>
        <li><?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?> </li>
<?php
$this->end();
?>
<div class="dropdown hidden-xs">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?= __("Actions") ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <?= $this->fetch('tb_actions') ?>
    </ul>
</div>

<div class="faculties view large-9 medium-8 columns content">
    <h3><?= h($faculty->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($faculty->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($faculty->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($faculty->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Programs') ?></h4>
        <?php if (!empty($faculty->programs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Faculty Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($faculty->programs as $programs): ?>
            <tr>
                <td><?= h($programs->id) ?></td>
                <td><?= h($programs->name) ?></td>
                <td><?= h($programs->description) ?></td>
                <td><?= h($programs->faculty_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Programs', 'action' => 'view', $programs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Programs', 'action' => 'edit', $programs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programs', 'action' => 'delete', $programs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
