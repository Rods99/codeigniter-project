<h2>Register</h2>
<?php echo validation_errors('<p class="bg-danger">'); ?>
<?php echo form_open('users/register', ['id' => 'register_form', 'class' => 'form-horizontal']); ?>

    <!-- First name -->
    <div class="form-group">
        <?php
        echo form_label('First name');
        echo form_input(['class' => 'form-control', 'name' => 'first_name', 'placeholder' => 'Enter first name']);
        ?>
    </div>

    <!-- Last name -->
    <div class="form-group">
        <?php
        echo form_label('Last name');
        echo form_input(['class' => 'form-control', 'name' => 'last_name', 'placeholder' => 'Enter last name']);
        ?>
    </div>

    <!-- Username -->
    <div class="form-group">
        <?php
        echo form_label('Username');
        echo form_input(['class' => 'form-control', 'name' => 'username', 'placeholder' => 'Enter username']);
        ?>
    </div>

    <!-- Email -->
    <div class="form-group">
        <?php
        echo form_label('Email');
        echo form_input(['class' => 'form-control', 'name' => 'email', 'placeholder' => 'Enter email', 'type' => 'email']);
        ?>
    </div>

    <!-- Password -->
    <div class="form-group">
        <?php
        echo form_label('Password');
        echo form_password(['class' => 'form-control', 'name' => 'password', 'placeholder' => 'Enter password']);
        ?>
    </div>

    <!-- Submit -->
    <div class="form-group">
        <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Register']); ?>
    </div>
<?php echo form_close(); ?>
