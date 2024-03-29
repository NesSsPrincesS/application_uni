<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\ProgramApplication[]|\Cake\Collection\CollectionInterface $programApplications
*/
?>
<?php
$this->start('tb_actions');
?>
        <li><?= $this->Html->link(__('New Program Application'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Universities'), ['controller' => 'Universities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New University'), ['controller' => 'Universities', 'action' => 'add']) ?></li>
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
<div class="programApplications index large-9 medium-8 columns content">
    <h3><?= __('Program Applications') ?></h3>    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_outcome_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('program_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('university_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programApplications as $programApplication): ?>
            <tr>
                <td><?= $programApplication->has('user_id') ? $this->Html->link($programApplication->user->name, ['controller' => 'Users', 'action' => 'view', $programApplication->user->id]) : '' ?></td>
                <td><?= $programApplication->has('application_outcome_id') ? $this->Html->link($programApplication->application_outcome->outcome, ['controller' => 'ApplicationOutcomes', 'action' => 'view', $programApplication->application_outcome->id]) : '' ?></td>
                <td><?= $programApplication->has('application_status_id') ? $this->Html->link($programApplication->application_status->status, ['controller' => 'ApplicationStatus', 'action' => 'view', $programApplication->application_status->id]) : '' ?></td>
                <td><?= $programApplication->has('program_id') ? $this->Html->link($programApplication->program->name, ['controller' => 'Programs', 'action' => 'view', $programApplication->program->id]) : '' ?></td>
                <td><?= $programApplication->has('university_id') ? $this->Html->link($programApplication->university->name, ['controller' => 'Universities', 'action' => 'view', $programApplication->university->id]) : '' ?></td>
                <td><?= h($programApplication->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $programApplication->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programApplication->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programApplication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programApplication->id)]) ?>
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
