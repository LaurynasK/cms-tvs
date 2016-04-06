
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title><?php echo $meta_title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" >
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://gist.githubusercontent.com/anonymous/1c33c653fe8ba83bc98a/raw/55e8aade29ecd80b28ca81ae9780e1f5d4fc8c90/datepicker.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--            <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="https://gist.githubusercontent.com/anonymous/7041d2cc2849774439cb/raw/7d0ecdcc645aafe0137a1fa7766b7b4fce49ed83/bootstrap-datepicker.js%2520"></script>
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