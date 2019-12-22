<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\University $university
 */
?>
<?php
$this->start('tb_actions');
?>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $university->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $university->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Universities'), ['action' => 'index']) ?></li>
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
<div class="universities form large-9 medium-8 columns content">
    <?= $this->Form->create($university) ?>
    <fieldset>
        <legend><?= __('Edit University') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('adress');
            echo $this->Form->control('web_site');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
