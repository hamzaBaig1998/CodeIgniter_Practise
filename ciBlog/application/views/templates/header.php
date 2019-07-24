 <?php
//  session_start();
  //if(!isset($_SESSION['cart'])){
    //$cart=0;
  //}
  //$count=$_SESSION['cart'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css?v=<?=time();?>" type="text/css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <title>CodeIgniter-Practise project</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="<?php echo base_url();?>">CiBlog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>posts">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>users">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>shop/view">Shop</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>cart/view"><i class="fas fa-shopping-cart"></i><span class="badge badge-pill badge-warning"><?=$count;?></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>posts/create">Create Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>users/create">Create User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>users/login">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">

