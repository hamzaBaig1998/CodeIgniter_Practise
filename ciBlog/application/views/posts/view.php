<div class="jumbotron jumbotron-fluid bg-dark text-white">
<a class="back-button mb-5" href="<?php echo base_url();?>posts"><i class="fas fa-arrow-left"></i></a>
<div class="text-center">
<h2><?php echo $post['title'];?></h2>
<small>Posted on: <?php echo $post['created_at']; ?></small>
</div>
</div>

<div class="post-body">
    <?php echo $post['body'];?> 
</div>
<hr>
<a class="btn btn-secondary float-left mr-3" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="submit" value="delete" class="btn btn-danger">
</form>
