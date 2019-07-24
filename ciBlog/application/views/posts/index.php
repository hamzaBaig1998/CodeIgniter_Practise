<div class="jumbotron jumbotron-fluid bg-dark text-white">
<h2 class="text-center display-3"><?=$title?></h2>
</div>
<div class="row">
<?php foreach($posts as $post):?>
    <div class="col-md-4 mb-3"> 
        <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>" alt="img" class="img-fluid">
    </div>
    <div class="col-md-8 mb-3">
        <h3><?php echo $post['title'];?></h3>
        <small class="post-date">Posted on: <?php echo $post['created_at'];?> </small><br>
        <?php echo word_limiter($post['body'],60);?><br><br>
        <p><a class="btn btn-secondary custom" href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a></p>
        <hr>
    </div>
    
<?php endforeach;?>
</div>