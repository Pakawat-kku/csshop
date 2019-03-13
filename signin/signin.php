<!DOCTYPE html>
<?php $rootFolder = "/csshop/"; 
include "../include/db.php";
$db = new DB();
$categorys = $db->Query('SELECT * FROM lib_category');
$list = $db->Query('SELECT * FROM product');
$mas = $db->Query('SELECT * FROM mas');
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            signin
        </title>
        <link rel="icon" type="images/png" href="../images/logo-square.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
      body{
        background-image: linear-gradient(#232323, #565555); 
        background-size:300%;
        background-repeat:none;
        width:100%;
        height:100%;
      }
    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top navbar-dark" style="background-color: #232323;">
    <a class="navbar-brand" href="<?=$rootFolder?>">
    <img src="<?=$rootFolder?>images/logo-square.png" width="50" height="50" class="d-inline-block align-top" alt="">
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
      
        <li class="nav-item">
          <a class="nav-link" href="<?=$rootFolder?>master/master.php"> &nbsp;&nbsp;CONTACT &nbsp;&nbsp; </a>
        </li>
        <?php
        if(isset($_SESSION['name']) && $_SESSION['name']!=""){ 
          ?>
        <li class="nav-item">
        <a class="nav-link" href="<?=$rootFolder?>cart/cart.php">CART <img src= "<?=$rootFolder?>cart/cart.png"  width="20" ></a>
      </li>
        <?php } ?>
    <li class="nav-item">
      <a class="nav-link" href="<?=$rootFolder?>how-to.php">HOW TO </a>
    </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="nav nav-item" >
          <a class="nav-link" href="<?=$rootFolder?>signup/signup.php">SIGN UP</a>
        </li>
        </ul>

        </div>
    </nav>

    <center>
    <div style="margin-top: 10%; color: white">
    <form class="px-4 py-3" action="login.php" method="post">
      <div class="form-group col-md-3">
        <label for="formGroupExampleInput" style="font-size:16pt;">Username</label>
        <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
      </div>
      <div class="form-group col-md-3">
        <label for="exampleInputPassword1" style="font-size:16pt;">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <small id="emailHelp" class="form-text text-muted">
        Create account <a href="<?=$rootFolder?>signup/signup.php" style="color:white;">Register</a>
        </small>
  
      </div><br>
      
      <button type="submit" class="btn btn-outline-light" style="margin-left: 15px">Submit</button>
    </form>
  </div>
  </center>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>