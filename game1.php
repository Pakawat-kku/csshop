<!DOCTYPE html>
<?php
session_start();
  $rootFolder = "/csshop/";  // ระบุ path ที่วาง program เช่น / , /csshop/ , /myproject/

  include('include/db.php');

  $db = new DB();
  $categorys = $db->Query('SELECT * FROM lib_category');
  $list = $db->Query('SELECT * FROM product');
  
?>
<?php include "connect.php"; ?>
<?php
        $fd = $pdo->prepare("SELECT * FROM product WHERE pid = ?"); // ดึงข้อมูล ต้องกำหนด ๅ เป็น ?
        $fd->bindParam(1, $_GET["pid"]); // น าค่า pid ทสี่ ง่ มากบั URL ก าหนดเป็นเงื่อนไข
        $fd->execute(); // เริ่มค ้นหา
        $row = $fd->fetch();
        ?>
<html>
<head>
  <meta charset="UTF-8">
  <title><?=$row['pname']?></title>
  <link rel="icon" type="images/png" href="images/logo-square.png">

  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fjalla+One|Josefin+Sans|News+Cycle|Oswald|Prompt|Roboto" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style-g.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>
<body bgcolor="#E6E6FA">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#232323; position:fixed width:100%;">
    <a class="navbar-brand" href="<?=$rootFolder?>category/?cat=<?=$row['category']?>">&#10094;</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?=$rootFolder?>">
          <img src= "<?=$rootFolder?>images/logo-square.png" width="40" style="margin-top:-8px; margin-left:-10px; margin-right:5px; position:relative; z-index:99;">
          <span class="sr-only"></span></a>
        </li>
        <li class="nav" style="color:white; margin-top:7px; padding-right:10px;"><?=$row["pname"]?>
        </li>
        <?php
      if(isset($_SESSION['name']) && $_SESSION['name']!=""){ 
        ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=$rootFolder?>cart/cart.php">CART <img src= "<?=$rootFolder?>images/cart.png"  width="20" ></a>
        </li>
      <?php } ?>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SEARCH &#x1F50D;</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <form class="form-inline dropdown-item" method='get' action='<?=$rootFolder?>search.php'>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    </div>
      </li>
        </ul>
    <ul class="nav navbar-nav navbar-right"  >
    <?php
    if(isset($_SESSION['name']) && $_SESSION['name']!=""){ 
      ?>
    <li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?=$_SESSION['username']?>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item " href="<?=$rootFolder?>profile/profile.php">PROFILE</a>
    <a class="dropdown-item " href="<?=$rootFolder?>signin/logout.php">SIGN OUT</a>
    </div>
  </li>
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

 
   <section id="section01" class="teaser" style="position:relative; width:100%; padding-top: 5%;">
     
   <h1 style="position:relative; left:2%;"  class = "E-font"><?=$row["pname"]?></h1><br><br>

          <center><iframe  width="560" height="315" src="https://www.youtube.com/embed/<?=$row['pvideo']?>?&autoplay=0" frameborder="0" allowfullscreen ></iframe><center><br>

    <a href="#section02">&#9660;DETAILS</a>
    </section>
    <div style="position: relative;  padding-top: 3%;  padding-right: 20%;  padding-bottom: 20%;  padding-left:20%; ">
    <section id="section02" class="teaser">
    
        <h3 class = "T-font">รายละเอียด</h3>
        <form>
        <p class = "T-font" style="font-size:17px; letter-spacing:1px;">ชื่อสินค้า : <?=$row ["pname"]?><br>
        <?php if($row['pid']==2 || $row['pid']==3 || $row['pid']==17){
			?>
        ราคา : <strike style="color:gray"><?=$row ["price"]?></strike>&nbsp;<span style="color:red"><?=$row['price']*0.9?></span> บาท
        <?php }else { ?>
        ราคา : <?=$row ["price"]?> บาท <?php } ?>
        <br>
        รายละเอียดสินค้า <br>
        <?=$row ["pdetail"]?><br>
        ปีที่ผลิต : <?=$row ["psince"]?><br>
        ค่ายที่ผลิต : <?=$row ["pdevoloper"]?><br></p>
        <center><a href="#section01">&#9650;BACK</a></center>
        <center><a href="<?=$rootFolder?>cart/cart.php?pid=<?=$row['pid']?>"><button type="button"  class="btn btn-danger btn-lg" > BUY!</button></a></center>
          </from>
  </section>
  <div>   



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        </body>
    </html>
