<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program[]|\Cake\Collection\CollectionInterface $programs
 */
?>
<?php
$this->start('tb_actions');
?>
        <li><?= $this->Html->link(__('New Program'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Program Applications'), ['controller' => 'ProgramApplications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program Application'), ['controller' => 'ProgramApplications', 'action' => 'add']) ?></li>
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
<div class="programs index large-9 medium-8 columns content">
    <h3><?= __('Programs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programs as $program): ?>
            <tr>
                <td><?= h($program->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $program->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $program->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->id)]) ?>
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
