<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>assets/js/jquery.js" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" charset="utf-8"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="<?php echo current_url() ==  base_url().'projects' ? 'active' : ''?>" >
                    <a href="<?php echo base_url(); ?>projects">
                        Projects
                        <!-- <span class="sr-only">(current)</span> -->
                    </a>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                  <?php if ($this->session->userdata('logged_in')): ?>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                             <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                              <?php echo $this->session->userdata('username') ?>
                              <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                                <a href="#" onclick="document.getElementById('logout_form').submit();">Logout</a>
                                <?php echo form_open('users/logout', ['id' => 'logout_form', 'style' => 'display:none']); ?>
                                    <?php echo form_submit(['name' => 'send', 'value' => 'Logout']); ?>
                                <?php echo form_close(); ?>
                            </li>
                          </ul>
                        </li>
                  <?php else: ?>
                      <li><a href="<?php echo base_url(); ?>/users/register">Register</a></li>
                  <?php endif; ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <?php if ($this->session->flashdata('flash_success')): ?>
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('flash_success'); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('flash_danger')): ?>
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('flash_danger'); ?>
                </div>
            <?php endif; ?>

            <div class="col-xs-3">
                <?php $this->load->view('users/login_view') ?>
            </div>
            <div class="col-xs-9">
                <?php $this->load->view($main_view) ?>
            </div>
        </div>
    </body>
</html>
