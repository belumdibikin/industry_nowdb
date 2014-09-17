<html>
    <head>
        <?php echo $this->load->view('head'); ?>
    </head>

    <body>
        <a href="<?php echo base_url() . "index.php/dashboard"; ?>">MASUK DASHBOARD</a>

        <?php echo $this->load->view('header'); ?>
        <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
        <?php echo $this->load->view('sidebar'); ?>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
            <?php echo $this->load->view('content'); ?>
        </div>
        
        <?php echo $this->load->view('footer'); ?>
    </body>
<html>