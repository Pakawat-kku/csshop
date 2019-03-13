
<?php
  session_start();
  $rootFolder = "/csshop/";  // ระบุ path ที่วาง program เช่น / , /csshop/ , /myproject/

  include('db.php');

  $db = new DB();
  $categorys = $db->Query('SELECT * FROM lib_category');
  $list = $db->Query('SELECT * FROM product');
  $mas = $db->Query('SELECT * FROM mas');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>CSS</title>
	<link rel="icon" type="images/png" href="<?=$rootFolder?>images/logo-square.png">
	<link rel="stylesheet" type="text/css" href="<?=$rootFolder?>style.css">
  <link rel="stylesheet" type="text/css" href="<?=$rootFolder?>master/style-m.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	<!--[if lt IE 9] >
   <script scr="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script scr="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
  <![endif] -->
</head>

<body class="bg">

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
      <a class="nav-link" href="<?=$rootFolder?>cart/cart.php">CART <img src= "<?=$rootFolder?>cart/cart.png"  width="20" ></a>
    </li>
      <?php } ?>
      <li class="nav-item">
      <a class="nav-link" href="<?=$rootFolder?>how.php">HOW TO </a>
    </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SEARCH &#x1F50D;</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <form class="form-inline dropdown-item" action='<?=$rootFolder?>search.php'>
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
<br>
<br>
<br>
<!-- เชี้ยเอ้ย -->