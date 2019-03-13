<?php
 $rootFolder = "/csshop/";
 ?>
<html>
<head>
<title>
sign up
</title>
<link rel="icon" type="images/png" href="../images/logo-square.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
	body{
		color: rgb(26,161,242);
		background-image:url('Q2.jpg') ;
		font-family: 'Josefin Sans', sans-serif;
		background-size:cover;
	}
	form{
		margin-top: 15%;
		margin-left: 5%;
		margin-right: 50%;
	}
	input{
		background-color: white;/*ทำสีตรงช่องใส่ข้อมูล*/
		color: #232323;
		border: 1px solid black;
		font-size: 15px;
	}
	.textareaB{
		border: 1px solid black;
		background-color: white;
		color: #232323;
		font-size: 15px;
	}
	/*#head{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 20%;
		background-color: #232323;
	}*/
	
	#h{
		margin-top:3%;
		padding-left: 10%;
		font-size: 70px;
		color:white;
	}
	#home{
		float:right;
		padding-top: 3%;
		color: white;
		text-decoration:none;
		font-size:20px;
	}
	#txfm{
		color:white;
		font-size:12pt;
	}
	a{
		color:white;
	}
	.ct{
		text-align:center;
		margin-left:30%;
	}
	#username { 
  padding: 0 20px 0 2px; 
}
.thinking { 
	background: white url("img/checking.gif") no-repeat; 
	background-position: 150px 1px;   
}

.approved { 
	background: white url("img/true.gif") no-repeat; 
	background-position: 150px 1px;   
}

.denied { 
	background: #FF8282 url("img/false.gif") no-repeat; 
	background-position: 150px 1px;   
}

	
	</style>
	<script>
var xmlHttp;
function checkUsername() {
document.getElementById("username").className = "thinking";
xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = showUsernameStatus;
var username = document.getElementById("username").value;
var url = "checkName.php?username=" + username;
xmlHttp.open("GET", url);
xmlHttp.send();
}
function showUsernameStatus() {
if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
if (xmlHttp.responseText == "okay") {
document.getElementById("username").className = "approved";
} else {
document.getElementById("username").className = "denied";
document.getElementById("username").focus();
document.getElementById("username").select();
 }
 }
}
</script>
</head>
<body>
	<!--<section id="head">-->
	<section>
	<div id="home" ><a href="<?=$rootFolder?>" >Home</a>&nbsp;|&nbsp;
	<a href="../signin/signin.php">Log in</a> &nbsp;</div>
	</section>
	<section>
	<center><div id="h">Create account</div></center>
	</section>
	<!--</section>-->
	<div class="ct">
	<form action="fsignup.php" method="post" style="margin-top:10%;">
		<span id="txfm">Name</span><br>
		<input type="text" name="name" id="name" placeholder="Name" class="form-control mb-2 mb-sm-0"><br><br>
		<span id="txfm">Username</span><br>
		<input type="text"  onblur="checkUsername()" name="username" id="username" placeholder="Username" class="form-control mb-2 mb-sm-0"><br><br>
		<span id="txfm">E-mail</span><br>
		<input type="email" name="email" id="email" placeholder="E-mail" class="form-control mb-2 mb-sm-0"><br><br>
		<span id="txfm">Password</span><br>
		<input type="password" name="password" id="password" placeholder="Password" class="form-control mb-2 mb-sm-0"><br><br>
		<span id="txfm">Confirm Password</span><br>
		<input type="password" name="conpassword" id="conpassword" placeholder="Confirm Password" class="form-control mb-2 mb-sm-0"><br><br>
		<span id="txfm">Address</span><br>
		<textarea class="textareaB" name="address" rows="3" cols="58" id="address" placeholder="Address"></textarea><br><br>
		<span id="txfm">Province</span><br>
		<input type="text" name="province" id="province" placeholder="Province" class="form-control mb-2 mb-sm-0"><br><br>
		<span id="txfm">Postal code</span><br>
		<input type="text" name="code" id="code" placeholder="Postal code" class="form-control mb-2 mb-sm-0"><br><br><br>
		<button type="submit" class="btn btn-outline-light" >SUBMIT</button>

</form>
</div>
<br><br><br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>