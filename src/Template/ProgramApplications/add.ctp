<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Faculties",
    "action" => "getFaculties",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('ProgramApplications/add', ['block' => 'scriptBottom']);
?>
<?php
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Universities'), ['controller' => 'Universities', 'action' => 'index']) ?></li>
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

    <div class="programApplications form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="FacultiesController">
    <?= $this->Form->create($programApplication) ?>
    <fieldset>
        <legend><?= __('Add Program Application') ?></legend>
        <?php
        echo $this->Form->control('university_id', ['options' => $universities]); 
        ?>
        <div>
            Faculties: 
            <select name="Faculty_id"
                    id="faculty-id" 
                    ng-model="faculty" 
                    ng-options="faculty.name for faculty in faculties track by faculty.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            Programs: 
            <select name="program_id"
                    id="program-id" 
                    ng-disabled="!faculty" 
                    ng-model="program"
                    ng-options="program.name for program in faculty.programs track by program.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    
</div>
