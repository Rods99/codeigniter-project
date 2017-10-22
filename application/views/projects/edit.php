<h2>Edit Project</h2>

<?php echo validation_errors('<p class="bg-danger">'); ?>
<?php echo form_open('projects/edit/'.$project->id, ['id' => 'project_form', 'class' => 'form-horizontal']); ?>

    <!-- Name -->
    <div class="form-group">
        <?php
        echo form_label('Name');
        echo form_input(['class' => 'form-control', 'name' => 'name', 'value' => $project->name]);
        ?>
    </div>

    <!-- Description -->
    <div class="form-group">
        <?php
        echo form_label('Description');
        echo form_textarea(['class' => 'form-control', 'name' => 'body', 'value' => $project->body]);
        ?>
    </div>

    <!-- Submit -->
    <div class="form-group">
        <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Update']); ?>
    </div>
<?php echo form_close(); ?>
