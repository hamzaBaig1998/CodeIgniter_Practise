<div class="jumbotron jumbotron-fluid bg-dark">
    <h2 class="display-3 text-center text-white">
        <?=$title;?>
    </h2>
</div>
<div class="d-flex justify-content-center my-5">
    <a href="<?=base_url();?>shop/insert" class="btn btn-success">Add items</a>
</div>
<div class="row">
<?php foreach($shop as $item):?>
    <div class="col-sm-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?=$item['item'];?></h5>
                <p class="card-text"><?=$item['description'];?></p>
                <p>Price: <?=$item['price'];?></p>
                <a href="<?=base_url();?>shop/addToCart/<?=$item['id'];?>" class="btn btn-primary custom">Add to cart</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>