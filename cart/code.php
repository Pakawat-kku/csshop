<!-- ถ้ามีเวลาเหลือค่อยมาดู -->
<!DOCTYPE html>
<?php include "../connect.php" ;
session_start();
$rootFolder = "/csshop/";
$categorys = $pdo->Query('SELECT * FROM lib_category');

if(!isset($_SESSION["username"]) || $_SESSION["username"] ==""){
  echo ('<script> alert("Not found any profile, Please login first."); window.location="../signin/signin.php";</script>');
  return ;
}

?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
          pay money
        </title>
    <script>
    function check(v){
      var n = document.getElementById("exampleInputEmail1");
      
      if(n.value == v){
        alert (n.value);
        window.location="ncode.php";
        //alert("Code is correct!\n\nThe delivery would be within the next few days.");
      }else
        alert("Code is incorrect!\n\nPlease enter again.");
    }
    </script>
        <link rel="icon" type="images/png" href="../images/logo-square.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    
    <body style="background-color: #252d41">
    
   

    <?php
  setcookie("visit", 0, time() + 3600 * 24 * 1);
  ?>
<?php
  setcookie("visit", 0, time() + 3600 * 24 * 1);
  ?>
  <?php // ทำ code

   $visit = $_COOKIE["visit"] + 1;
    setcookie("visit", $visit, time() + 3600 * 24);
  ?>
  <?php
  $stmt = $pdo->prepare("SELECT * FROM product WHERE pid = $visit");
  $stmt-> execute();
  $row = $stmt->fetch();
  $show = $row["price"] + $visit;
?>
  <br><br><p style="font-size: 80px;color: white;margin-top: 75px;text-align: center;">Code : <?=$show?></p>
    <div style="margin-top: 5px;height: 5px;"><img src="1.jpg"height="300"></div>
    <div style="margin-top: 75px; color: white">
    <form class="px-4 py-3">
     <center>
      <div class="form-group col-md-3">
      
        <label for="exampleInputEmail1">Please confirm your code.</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter code">
        <small id="emailHelp" class="form-text text-muted"></small>
        <button type="submit" class="btn btn-outline-primary" style="margin-left: 10px" onclick="check(<?=$show?>)">Submit</button>
      </div>
       </center>
    </form>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>