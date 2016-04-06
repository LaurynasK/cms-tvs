<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $meta_title; ?></title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="<?php echo base_url();?>assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
    
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <?php $this->load->view($subview); // Subview is set in controller ?>
                </div>
	</div>    
                    
        </body>
</html>