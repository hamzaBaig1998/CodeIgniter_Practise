<div class="jumbotron jumbotron-fluid bg-dark text-white">
<h2 class="text-center display-3"><?=$title?></h2>
</div>

<?php echo validation_errors();?>


<?php echo form_open('shop/insert');?>
  <div class="form-group">
    <label>Item</label>
    <input type="text" class="form-control" name="item" placeholder="Insert Item Name">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price" placeholder="Insert Item Price">
  </div>
  <div class="form-group">
    <label>Description</label>
    <Textarea id="editor1" name="description" class="form-control" placeholder="Insert Description"></Textarea>
  </div>
  <button type="submit" class="btn btn-secondary custom btn-block">Submit</button>
</form>