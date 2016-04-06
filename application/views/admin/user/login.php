<div class="panel-body">
    
        <hr />
            <h5>Enter Details to Login</h5>
        <br />
            <?php echo validation_errors(); ?>
            <?php echo form_open();?>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                <?php echo form_input('email', '', 'placeholder="Your Username" class="form-control"'); // ?>
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                <?php echo form_password('password', '', 'placeholder="Your Password" class="form-control"'); ?>
            </div>
            
        
                <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary"'); ?>
                <hr />
                
            <?php echo form_close();?>
    
</div>


