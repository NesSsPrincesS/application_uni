<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramApplication $programApplication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
    </ul>
</nav>
<div class="programApplications form large-9 medium-8 columns content">
    <?= $this->Form->create($programApplication) ?>
    <fieldset>
        <legend><?= __('Add Program Application') ?></legend>
        <?php
            echo $this->Form->control('program_id', ['options' => $programs]);
            echo $this->Form->control('university_id', ['options' => $universities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
