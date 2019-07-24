<div class="jumbotron jumbotron-fluid bg-dark text-white">
<h2 class="text-center display-3"><?=$title?></h2>
</div>
<div class="row">
<?php foreach($users as $user):?>
    <div class="col-md-4 mb-3">
        <div class="card px-3 py-3">
            <div class="card-body">
                <h1 class="lead"><small>Name:</small> <?=$user['name']?></h1>
                <h3 class="lead"><small>Email:</small> <?=$user['email']?></h3>
                <h3 class="lead"><small>Age:</small> <?=$user['age']?></h3>
            <div class=" text-white mt-3">
                <a href="<?php echo base_url();?>users/edit/<?=$user['id']?>" class="btn btn-primary float-left mr-3 px-3 custom">Edit</a>
                <?php echo form_open('/users/delete/'.$user['id']);?>
                    <input type="submit" value="delete" class="btn btn-danger px-3 custom">
                </form>
            </div>
        </div>
        </div>
    </div>
<?php endforeach;?>
</div>
    
   