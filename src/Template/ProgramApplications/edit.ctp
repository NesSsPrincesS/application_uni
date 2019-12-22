<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramApplication $programApplication
 */
?>
<?php
$this->start('tb_actions');
?>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $programApplication->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $programApplication->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Program Applications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Application Outcomes'), ['controller' => 'ApplicationOutcomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application Outcome'), ['controller' => 'ApplicationOutcomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Application Status'), ['controller' => 'ApplicationStatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application Status'), ['controller' => 'ApplicationStatus', 'action' => 'add']) ?></li>
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
<div class="programApplications form large-9 medium-8 columns content">
    <?= $this->Form->create($programApplication) ?>
    <fieldset>
        <legend><?= __('Edit Program Application') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('application_outcome_id', ['options' => $applicationOutcomes]);
            echo $this->Form->control('application_status_id', ['options' => $applicationStatus]);
            echo $this->Form->control('program_id', ['options' => $programs]);
            echo $this->Form->control('university_id', ['options' => $universities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
