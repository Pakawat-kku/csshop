<?php include "connect.php";
session_start();
$categorys = $pdo->Query('SELECT * FROM lib_category'); 
$rootFolder='/csshop/';
?>
<html>
<head><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>
    search
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  
<style>
body{
    background-color:#252d41;
}
a{
    color:white;
    text-decoration:none;
}
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light  fixed-top navbar-dark" style="background-color: #232323;">
<a class="navbar-brand" href="<?=$rootFolder?>">
    <img src="images/logo-square.png" width="50" height="50" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?=$rootFolder?>">HOME &nbsp;&nbsp;&nbsp; <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GAMES  
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
      foreach($categorys as $category){$url=$category['url']? $category['url']:$category['name'];
          ?>
          <a class="dropdown-item " href="<?=$rootFolder?>category/?cat=<?=$category['code']?>"><?=$category['name']?>&nbsp;</a>
           <?php } ?>
        </div>
      </li>
      
     <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="<?=$rootFolder?>master/master.php"> &nbsp;&nbsp;CONTACT &nbsp;&nbsp; </a>
      </li>
      <?php
      if(isset($_SESSION['name']) && $_SESSION['name']!=""){ 
        ?>
      <li class="nav-item">
      <a class="nav-link" href="<?=$rootFolder?>cart/cart.php">CART <img src= "cart/cart.png"  width="20" ></a>
    </li>
      <?php } ?>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SEARCH &#x1F50D;</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
        <form class="form-inline dropdown-item" action="search.php">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" >
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
      </li>
</ul>

      <ul class="nav navbar-nav navbar-right">
        
      <?php
      if(isset($_SESSION['name']) && $_SESSION['name']!=""){ 
        ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?=$_SESSION['username']?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item " href="<?=$rootFolder?>profile/profile.php">PROFILE</a>
        <a class="dropdown-item " href="<?=$rootFolder?>signin/logout.php">SIGN OUT</a>
        </div>
      </li>

      <!--<li class="nav-item" style="color:white; font-size:14pt;">
      <a class="nav-link" href="profile.php">
      <.?=$_SESSION['username']?></a></li>
      <li class="nav-item">
      <a class="nav-link" style="font-size:10pt;" href="<.?=$rootFolder?>signin/logout.php">(SIGN OUT)</a>
      </li>-->

      <?php }else{ ?>
      <li class="nav nav-item" >
        <a class="nav-link" href="<?=$rootFolder?>signup/signup.php">SIGN UP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$rootFolder?>signin/signin.php">SIGN IN</a>
      </li>
      <?php } ?>
        </ul>

  </div>
</nav>
<br><br><br><br><br>

<?php

$stmt = $pdo->prepare("SELECT * FROM product WHERE pname LIKE ? ");

if (!empty($_GET)) 
$value = '%'. $_GET["keyword"] . '%'; 
$stmt->bindParam(1, $value);
$stmt->execute();
?>
<!--<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right:5px;">
    <form class="form-inline dropdown-item" action="search.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" style="width:50%"; >
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>-->

<center style="color:gray;font-size:16pt;">
 <b>search for " <?=$_GET['keyword']?>"</b>   
</center>
<br><br>

<?php 
while ($row = $stmt->fetch()) : ?>

<div style="position:relative; left:3%;" >
    <a href="game1.php?pid=<?=$row['pid']?>" >
    <img src="images/<?=$row["pid"]?>.jpg" width="20%" >
    &nbsp;
    <?=$row ["pname"]?>
    -
    <span style="color:red"><?=$row ["price"]?> บาท </span></a>
    <br><br><br><br>
</div>
<?php endwhile; ?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
<!--เชี้ยเอ้ย-->