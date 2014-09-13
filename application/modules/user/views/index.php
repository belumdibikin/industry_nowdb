<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html>
    <head>
        <?php echo $this->load->view('head'); ?>
    </head>
    <body>
        <!-- page container -->
        <div id="page-container">
            <!-- header -->
            <header>
                
            </header>
        </div>
        <!-- Inner Container -->
        <div id="inner-container">
            <div id="page-content">
                
            </div>
        </div>
        <?php echo $this->load->view('js'); ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#page-content').load("<?php echo site_url('user/page_login') ?>");
            });
        </script>
    </body>
</html>