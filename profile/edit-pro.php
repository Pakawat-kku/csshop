<?php 
    include "../include/header.php";
    if(!isset($_SESSION["username"]) ||$_SESSION["username"] ==""){
        echo ('<script> alert("Not found any profile, Please login first."); window.location="../signin/signin.php";</script>');
        return ;
    }
    $pro=$db->Query('SELECT * FROM customer WHERE username="'.$_SESSION["username"].'" ');
    $pro=$pro[0];
    ?>
    <br><br><br>
<center>
    
<div class="card mb-3 bg-light" style="max-width: 40rem; font-size:13pt;">
  <div class="card-header" style="background-color:#c0c5db"><b>Edit Profile</b></div>
  <div class="card-body">
    <p class="card-text">
        <form action="insert-edit.php" method="post">
    <b>Name : </b>
    <input type="text" name="name" id="name" placeholder="<?=$pro['pname'];?>"><br><br>
<!--<b>Username : </b>
<input type="text" name="username" id="username" placeholder="<.?=$pro['username'];?>"><br><br>-->
<b>Password : </b>
<input type="password" name="password" id="password" ><br><br>
<b>Confirm Password : </b>
<input type="password" name="con-pass" id="con-pass"><br><br>
<b>E-mail : </b>
<input type="email" name="email" id="email" placeholder="<?=$pro['email'];?>"><br><br>
<b>Address : </b>
<input type="text" name="address" id="address" placeholder="<?=$pro['address'];?>"><br><br>
<b>Province : </b>
<input type="text" name="province" id="province" placeholder="<?=$pro['province'];?>"><br><br>
<b>Postal Code : </b>
<input type="text" name="postalCode" id="postalCode" placeholder="<?=$pro['postalCode'];?>"><br><br>
<br>   
<button type="submit" class="btn btn-outline-dark btn-lg">Submit</button>
<a href="<?=$rootFolder?>profile/profile.php" style="z-index:3;"><button type="button" class="btn btn-outline-dark btn-lg">Cancel</button></a>
</form>
    </p>
  </div>
</div>

</center>
<br><br>
<?php include "../include/footer.php"; 
?>