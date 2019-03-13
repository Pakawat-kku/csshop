<?php

include "insert-customer.php"; 
$rootFolder = "/csshop/";
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

<h1 class="mt">
    Finish!
</h1>
<center><img src="right.png" width="200" alt="" class="mg"></center>
<br><br>
<h2 class="gt">
    GO TO&nbsp;" <a style="color:white" href="<?=$rootFolder?>signin/signin.php">LOG IN</a> "
</h2>
<br>
<h6 class="gt">
    back to <a href="<?=$rootFolder?>">HOME</a>
</h6>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>