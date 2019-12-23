<?php
$urlToRestApi = $this->Url->build([
    'controller' => 'Universities'], true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Universities/index', ['block' => 'scriptBottom']);
?>
<?php
$this->start('tb_actions');
?>
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

<div  ng-app="app" ng-controller="UniversityCRUDCtrl">
    <table>
        <tr>
            <td width="100">ID:</td>
            <td><input type="text" id="id" ng-model="university.id" /></td>
        </tr>
        <tr>
            <td width="100">Name:</td>
            <td><input type="text" id="name" ng-model="university.name" /></td>
        </tr>
        <tr>
            <td width="100">Adress:</td>
            <td><input type="text" id="description" ng-model="university.adress" /></td>
        </tr>
        <tr>
            <td width="100">Web site:</td>
            <td><input type="text" id="description" ng-model="university.web_site" /></td>
        </tr>
    </table>
    <br /> <br /> 
    <a ng-click="getUniversity(university.id)">Get University</a> 
    <a ng-click="updateUniversity(university.id, university.name, university.adress, university.web_site)">Update University</a> 
    <a ng-click="addUniversity(university.name, university.adress, university.web_site)">Add University</a> 
    <a ng-click="deleteUniversity(university.id)">Delete University</a>

    <br /> <br />
    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <br />
    <br /> 
    <a ng-click="getAllUniversities()">Get all Universities</a><br /> 
    <br /> <br />
    <div ng-repeat="university in Universities">
        {{university.id}} {{university.name}} {{university.adress}} {{university.web_site}}
    </div>
    <!-- pre ng-show='university'>{{universities | json }}</pre-->
</div>

