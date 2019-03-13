<?php
session_start();
$rootFolder='/csshop/';
if(!isset($_SESSION["username"]) ||$_SESSION["username"] ==""){
    echo ('<script> alert("Not found any profile, Please login first."); window.location="../signin/signin.php";</script>');
    return ;
}
?>
<html>
<head><meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Checkout</title>
<link rel="icon" type="images/png" href="<?=$rootFolder?>images/logo-square.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <style>
  a{
      color:white;
  }
  </style>
</head>
<body style="background-color:#252d41;">

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
    <li class="nav-item">
      <a class="nav-link" href="<?=$rootFolder?>how.php">HOW TO </a>
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

<br><br><br><br><br><br>
<?php
mysql_connect("localhost","root","");
mysql_select_db("csshop");
?>
<center>
<table class="table col-md-6" style="background-color:#636d96; color:#252d41; width:50%; ">
  <tr style="background-color:#838bad; color:#252d41;">
    <th width="82">pname</th>
    <th width="82">price</th>
    <th width="79">Count</th>
    <th width="79">Total</th>
  </tr>
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strpid"][$i] != "")
	  {
		$strSQL = "SELECT * FROM product WHERE pid = '".$_SESSION["strpid"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());
        $objResult = mysql_fetch_array($objQuery);
        if($objResult['pid']==2 || $objResult['pid']==3 || $objResult['pid']==17){
            $objResult['price']=$objResult['price']*0.9;
            
        }
		$Total = $_SESSION["strQty"][$i] * $objResult["price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		
		<td><?php echo $objResult["pname"];?></td>
		<td><?php echo $objResult["price"];?></td>
		<td><?php echo $_SESSION["strQty"][$i];?></td>
		<td><?php echo number_format($Total,2);?></td>
	  </tr>
	  <?php
	  }
  }
  ?>
</table></center>
<center style="color:white; font-size:15pt;">Sum Total <?php echo number_format($SumTotal,2);?></center>
<br><br>
<?php
include '../include/db.php';
$db=new DB();
$pro=$db->Query('SELECT * FROM customer WHERE username="'.$_SESSION["username"].'" ');
$pro=$pro[0];
?>
<center>
<span style="color:white">Please check your profile.</span>
<br>
<form name="form1">
  <table class="table col-md-6" style="background-color:#838bad; color:#252d41; width:30%; ">
    <tr style=" color:#252d41;">
      <th width="71">Name</th>
      <td width="217"><?=$pro['pname']?> </td>
    </tr>
    <tr>
      <th>Address</th>
      <td><?=$pro['address']?></textarea></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><?=$pro['email']?></td>
    </tr>
    <tr>
      <th>Province</th>
      <td><?=$pro['province']?></td>
    </tr>
    <tr>
      <th>Postal Code</th>
      <td><?=$pro['postalCode']?></td>
    </tr>
  </table>
    <a href="pay.php?total=<?=$SumTotal?>"><button type="button" class="btn btn-outline-primary btn-lg">SUBMIT</button></a>
    &nbsp;&nbsp;&nbsp;<a href="../profile/edit-pro.php">EDIT PROFILE</a>
</form>
</center>
<?php
mysql_close();
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


</body>
</html>