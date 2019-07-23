<div class="jumbotron jumbotron-fluid bg-dark text-white">
<h2 class="text-center display-3"><?=$title?></h2>
</div>

<?php echo validation_errors();?>


<?php echo form_open('users/create');?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="number" class="form-control" name="age" placeholder="Add Age">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Add Email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Add Password">
  </div>
  <button type="submit" class="btn btn-secondary custom btn-block">Submit</button>
</form>