<h2>Login</h2>

<?php echo $this->session->flashdata('errors'); ?>

<?php
 foreach ($this->session->flashdata() as $key => $value) {
     echo $key.':'.$value;
 }
 foreach ($this->session->all_userdata() as $key => $value) {
     echo $key.':'.$value;
 }
 ?>

<?php
 foreach ($this->session->flashdata() as $key => $value) {
     echo $key.':'.$value.'<br>';
 }
 foreach ($this->session->all_userdata() as $key => $value) {
     echo $key.':'.$value.'<br>';
 }
 ?>

<?php echo form_open('users/login', ['id' => 'login_form', 'class' => 'form-horizontal']); ?>

<!-- Username -->

<div class="form-group">
    <?php
    echo form_label('Username');
    echo form_input(['class' => 'form-control', 'name' => 'username', 'placeholder' => 'Enter username']);
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
    <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Login']); ?>
</div>


<?php echo form_close(); ?>
