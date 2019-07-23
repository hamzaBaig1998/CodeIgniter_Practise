<div class="jumbotron jumbotron-fluid bg-dark text-white">
<h2 class="text-center display-3"><?=$title?></h2>
</div>

<?php echo validation_errors();?>


<?php echo form_open('posts/create');?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <Textarea id="editor1" name="body" class="form-control" placeholder="Add Body"></Textarea>
  </div>
  <button type="submit" class="btn btn-secondary custom btn-block">Submit</button>
</form>