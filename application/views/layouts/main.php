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
        <div class="container">
            <div class="col-xs-3">

            </div>
            <div class="col-xs-9">
                <?php $this->load->view($main_view) ?>
            </div>
        </div>
    </body>
</html>
