
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

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
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://gist.githubusercontent.com/anonymous/1c33c653fe8ba83bc98a/raw/55e8aade29ecd80b28ca81ae9780e1f5d4fc8c90/datepicker.css">
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      
    <?php if(isset($sortable) && $sortable === TRUE): ?>
	<script src="<?php echo ('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'); ?>"></script>
        <script src="<?php echo ('https://raw.githubusercontent.com/mjsarfatti/nestedSortable/master/jquery.mjs.nestedSortable.js'); ?>"></script>
    <?php endif; ?>

                
        
            <script type="text/javascript" src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                <script type="text/javascript">
                tinymce.init({
                    selector: "textarea",
                    theme: "modern",
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor colorpicker textpattern imagetools"
                    ],
                    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                    toolbar2: "print preview media | forecolor backcolor emoticons",
                    image_advtab: true,
                    templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                    ]
                });
            </script>
            
            
    
</head>
    
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('/admin/dashboard') ?>"><?php echo $meta_title; ?></a>
            </div>

            <div class="header-right">
                <?php echo anchor('admin/user/logout', '<i class="fa fa-exclamation-circle fa-2x"></i>', array('class' => 'btn btn-danger', 'title' => 'Logout' )); ?>
              </div>
        </nav>
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            
                            <div class="inner-text">
                                <?php echo 'User'; ?>
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>
                    
                    <li>
                        <a class="<?=($this->uri->segment(2)==='dashboard')?'active-menu':''?>" href="<?php echo site_url('admin/dashboard') ?>"><i class=" fa fa-dashboard "></i>Dashboard</a>
                        
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Page <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a class="<?=($this->uri->segment(2)==='page')?'active-menu':''?>" href="<?php echo site_url('/admin/page') ?>"><i class=" fa fa-desktop"></i>Page</a>
                            </li>
                             <li>
                                <a class="<?=($this->uri->segment(3)==='order')?'active-menu':''?>" href="<?php echo site_url('admin/page/order') ?>"><i class=" fa fa-bars "></i>Order_of_Pages</a>
                            </li>
                             <li>
                                <a class="<?=($this->uri->segment(2)==='article')?'active-menu':''?>" href="<?php echo site_url('admin/article') ?>"><i class="fa fa-newspaper-o "></i>News_Articles</a>
                            </li>
                             
                        </ul>
                    </li>
                     
                    <li>
                        <a class="<?=($this->uri->segment(2)==='user')?'active-menu':''?>" href="<?php echo site_url('admin/user') ?>"><i class=" fa fa-user "></i>Users </a>
                        
                    </li>
                 </ul>
            </div>

        </nav>
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php $this->load->view($subview); ?>
                        
                        
                    </div>
                </div>
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2016 CMS 
    </div>




</body>
</html>
</html>