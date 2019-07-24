<div class="jumbotron jumbotron-fluid text-white custom-bg">
<h2 class="text-center display-3"><?=$title?></h2>
</div>
<?php echo validation_errors();?>
<div class="col-6 offset-3">
<?php echo form_open('users/login_user'); ?>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" id="Email" class="form-control" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label for="Pass">Password</label>
        <input type="password" id="pass" class="form-control" name="password" placeholder="Enter Password">
    </div>
    <input type="submit" value="Login" class="btn btn-primary btn-block my-4 custom py-2">
    <a href="<?=base_url();?>users/create" class="btn btn-primary btn-block my-4 custom py-2">Register</a>
</form>
 
</div>
