<div class="jumbotron jumbotron-fluid bg-dark text-white">
<h2 class="text-center display-3"><?=$title?></h2>
</div>

<?php echo validation_errors();?>


<?php echo form_open('posts/update');?>
<input type="hidden" name="id" value="<?php echo $post['id'];?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <Textarea id="editor1" name="body" class="form-control" ><?php echo $post['body'];?></Textarea>
  </div>
  <button type="submit" class="btn btn-secondary custom">Submit</button>
</form>