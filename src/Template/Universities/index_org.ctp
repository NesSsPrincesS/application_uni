<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\University[]|\Cake\Collection\CollectionInterface $universities
*/

$urlToRestApi = $this->Url->build('/api/universities', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Universities/index', ['block' => 'scriptBottom']);
?>
<div class="container">
    <div class="row">
        <div class="panel panel-default universities-content">
            <div class="panel-heading">University<a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add</h2>
                <form class="form" id="universityAddForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <div class="form-group">
                        <label>Adress</label>
                        <input type="text" class="form-control" name="adress" id="adress"/>
                    </div>
                    <div class="form-group">
                        <label>Web site</label>
                        <input type="text" class="form-control" name="web_site" id="web_site"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="universityAction('add')">Add University</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add University" -->
                </form>
            </div>
            <div class="panel-heading">University<a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="editLink" onclick="javascript:$('#editForm').slideToggle();">Edit</a></div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit</h2>
                <form class="form" id="universityEditForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="nameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Adress</label>
                        <input type="text" class="form-control" name="adress" id="adressEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Web site</label>
                        <input type="text" class="form-control" name="web_site" id="web_siteEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="universityAction('edit')">Update University</a>
                    <!-- input type="submit" class="btn btn-success" id="editButton" value="Update University" -->
                </form>
            </div>

            <div class="panel-heading">Universities</div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Adress</th>
                        <th>Web site</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="universityData">
                    <?php
                    $count = 0;
                    foreach ($universities as $university): $count++;
                    ?>
                    <tr>
                        <td><?php echo '#' . $count; ?></td>
                        <td><?php echo $university['name']; ?></td>
                        <td><?php echo $university['adress']; ?></td>
                        <td><?php echo $university['web_site']; ?></td>
                        <td>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editUniversity('<?php echo $university['id']; ?>')">edit</a>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? universityAction('delete', '<?php echo $university['id']; ?>') : false;">delete</a>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                    <?php
                    if($count <= 0){
                    echo "<tr><td colspan='5'>No cocktail(s) found......</td></tr>" ;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
