<?php
session_start();
$rootFolder = "/csshop/";
if(!isset($_SESSION["username"]) ||$_SESSION["username"] ==""){
  echo ('<script> alert("Not found any profile, Please login first."); window.location="../signin/signin.php";</script>');
  return ;
}
?>
<html>
<head><meta charset="UTF-8">
<title>
    finish
</title>
<link rel="icon" type="images/png" href="../images/logo-square.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<style>
    body{
        background-image: linear-gradient(#232323, #565555);
    }
    .mg{
        margin-top:3%;
        position:static;
    }
    .mt{
        color:white;
        text-align:center;
        margin-top:7%;
        font-size:30pt;
    }
    .gt{
        color:#232323;
        text-align:center;
    }
    a{
        text-decoration:none;
        color:#c4c4c4;
    }
</style>
</head>
<body>
<!--<div class="jumbotron jumbotron-fluid" style="background-color:#232323; z-index:-1; color:#c0c5db; position:relative; height:10%;">
<div class="container">
  <center><h1 class="display-3" style="letter-spacing:10px; font-family:'AngsanaUPC';"><b>CSS</b></h1>
  <p class="lead" style="letter-spacing:10px;"><i><b>computer science shop.</b></i></p></cemter>
</div>
</div>-->
<nav class="navbar navbar-expand-lg navbar-light  fixed-top navbar-dark" style="background-color: #232323;">
<a class="navbar-brand" href="<?=$rootFolder?>">
    <img src="<?=$rootFolder?>/images/logo-square.png" width="50" height="50" class="d-inline-block align-top" alt="">
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
      <a class="nav-link" href="<?=$rootFolder?>cart/cart.php">CART <img src= "../cart/cart.png"  width="20" ></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$rootFolder?>how.php">HOW TO </a>
    </li>
      <?php } ?>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SEARCH &#x1F50D;</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <form class="form-inline dropdown-item" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
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

<h1 class="mt">
    Finish!
</h1>
<center><img src="right.png" width="200" alt="" class="mg"></center>
<br><br>
<h2 class="gt">
    GO TO&nbsp;" <a style="color:white" href="<?=$rootFolder?>index.php">HOME</a> "
</h2>
<br>
<center><h3 style="color :yellow">สิ้นค้าจะถูกจัดส่งภายใน 3 วัน </h3></center><br>
<br><br>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>