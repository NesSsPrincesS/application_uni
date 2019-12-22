<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<?php
$this->start('tb_actions');
?>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $faculty->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?></li>
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
<div class="faculties form large-9 medium-8 columns content">
    <?= $this->Form->create($faculty) ?>
    <fieldset>
        <legend><?= __('Edit Faculty') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
