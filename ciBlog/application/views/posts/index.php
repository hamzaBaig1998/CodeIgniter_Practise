<div class="jumbotron jumbotron-fluid bg-dark text-white">
<h2 class="text-center display-3"><?=$title?></h2>
</div>
<?php foreach($posts as $post):?>
    <h3><?php echo $post['title'];?></h3>
    <small class="post-date">Posted on: <?php echo $post['created_at'];?> </small><br>
    <?php echo word_limiter($post['body'],60);?><br><br>
    <p><a class="btn btn-secondary custom" href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a></p>
    <hr>
<?php endforeach;?>
