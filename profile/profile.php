<?php 
    include "../include/header.php";
    if(!isset($_SESSION["username"]) ||$_SESSION["username"] ==""){
        echo ('<script> alert("Not found any profile, Please login first."); window.location="../signin/signin.php";</script>');
        return ;
    }
    $pro=$db->Query('SELECT * FROM customer WHERE username="'.$_SESSION["username"].'" ');
    $pro=$pro[0];
    ?>
    <br>
<br><br><br>

<center>
    
<div class="card mb-3 bg-light" style="max-width: 40rem; font-size:13pt;">
  <div class="card-header" style="background-color:#c0c5db"><b>Profile</b></div>
  <div class="card-body">
    <p class="card-text">
        <form action="edit-pro.php" method="post">
    <b>Name : </b><?=$pro['pname'];?><br>
<b>Username : </b><?=$pro['username'];?><br>
<b>E-mail : </b><?=$pro['email'];?><br>
<b>Address : </b><?=$pro['address'];?><br>
<b>Province : </b><?=$pro['province'];?><br>
<b>Postal Code : </b><?=$pro['postalCode'];?><br><br>   
<button type="submit" class="btn btn-outline-dark btn-lg">Edit</button>
</form>
    </p>
  </div>
</div>

</center>

<?php include "../include/footer.php"; 
?>