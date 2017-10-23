<h2>
    Edit task for
    <a href="<?php echo base_url().'projects/show/'.$project->id; ?>"><?php echo $project->name; ?></a>
    project
</h2>
<br>

<?php echo validation_errors('<p class="bg-danger">'); ?>
<?php echo form_open('tasks/edit/'.$task->id, ['id' => 'task_form', 'class' => 'form-horizontal']); ?>

    <!-- Name -->
    <div class="form-group">
        <?php
        echo form_label('Name');
        echo form_input(['class' => 'form-control', 'name' => 'name', 'value' => $task->name]);
        ?>
    </div>

    <!-- Description -->
    <div class="form-group">
        <?php
        echo form_label('Description');
        echo form_textarea(['class' => 'form-control', 'name' => 'body', 'value' => $task->body]);
        ?>
    </div>

    <!-- Submit -->
    <?php echo form_submit(['class' => 'btn btn-primary pull-left', 'name' => 'submit', 'value' => 'Update']); ?>
<?php echo form_close(); ?>

<a href="<?php echo base_url().'tasks/delete/'.$task->id; ?>" class="btn btn-xs btn-danger pull-right">Delete</a>
