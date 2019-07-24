    <div class="jumbotron jumbotron-fluid bg-dark">
        <h3 class="text-center text-white display-4"><?=$title;?></h3>    
    </div>
    <table class="table">
        <thead>
            <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Calculated price</th>
            <th>Action</th>
            </tr>
        </thead>
        <?php $total=0;$count=0;?>
    <?php foreach($cart as $item):?>
        <tr>
            <td><?=$item['name'];?></td>
            <td><?=$item['price'];?></td> 
            <td><?=$item['quantity'];?></td>  
            <td><?=$item['quantity']*$item['price'];?></td>  
            <td><a href="<?php echo base_url();?>cart/remove_one/<?=$item['id']?>" class="btn btn-danger mr-3">Remove 1</a><a href="<?php echo base_url();?>cart/remove/<?=$item['id']?>" class="btn btn-danger mr-3">Remove all</a><a href="<?php echo base_url();?>cart/add_one/<?=$item['id']?>" class="btn btn-success"> Add 1</a></td>
        </tr>
        <?php 
        $total+=$item['quantity']*$item['price'];
        $count++;
        ?>
    <?php endforeach;
        echo "<strong>Total: </strong>".$total;
       // $_SESSION['cart']=$count;
    ?>

    </table>

