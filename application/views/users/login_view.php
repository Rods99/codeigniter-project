<h2>Login view</h2>

<?php echo form_open('users/login', ['id' => 'login_form', 'class' => 'form-horizontal']); ?>

<!-- Username -->

<div class="form-group">
    <?php
    echo form_label('Username');
    echo form_input(['class' => 'form-control', 'name' => 'Username', 'placeholder' => 'Enter username']);
    ?>
</div>

<!-- Password -->

<div class="form-group">
    <?php
    echo form_label('Password');
    echo form_password(['class' => 'form-control', 'name' => 'Password', 'placeholder' => 'Enter password']);
    ?>
</div>

<!-- Submit -->

<div class="form-group">
    <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Login']); ?>
</div>


<?php echo form_close(); ?>
