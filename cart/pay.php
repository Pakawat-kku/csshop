<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"]) ||$_SESSION["username"] ==""){
    echo ('<script> alert("Not found any profile, Please login first."); window.location="../signin/signin.php";</script>');
    return ;
}
?>
<html>
<head>
	<title>Pay</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
		body{
			font-family: 'Josefin Sans', sans-serif;
			background-color: #252D41;
		}
		#s{
			margin-top: 40%;
			color: white;
			text-align: center;
		}
		.pic{
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			z-index: -1;
		}
		h1{
			margin-top: 10%;
			margin-left: 50%;
			font-size: 100px;
			color: black;
		}
		.img{
			border-radius: 100%;
		}
		a:hover {
    	opacity: 0.8;
		}
		/* ทำให้ช่องใส่ข้อมูลกว้างขึ้น */
		input[type=text]{
    	width: 100%;
    	padding: 5px; /* ระยะของขอบกล่องกับ pattern */
    	margin: 8px 0;  /* 8px คือระยะห่างระหว่างตัวหนังสือกับกล่อง 0 คือ ทำให้ตัวหนังสือย่หน้าเท่ากันกับกล่อง */
    	box-sizing: border-box;/* ทำให้ทุกอย่างอยู่ในกล่อง ไม่เลยออกมานอกกล่อง เช่น ช่องกรอกข้อมูล */
		}

		/* ออกแบบปุ่มทั้งหมด */
		button {
    	background-color: #4CAF50;
    	color: white;
    	padding: 10px;
    	border: none; /* ทำให้ไม่มีกรอบ */
    	cursor: pointer; /* เวลาชี้ไปที่ปุ่ม pay,cancel เมาส์จะกลายเป็นรูปมือ */
    	width: 100%;
		}

		/* ออกแบบปุ่ม cancel */
		.cancelbtn {
    	width: auto;
   	 	padding: 10px 18px;
    	background-color: #f44336;
		}	

		/* ระยะห่างจากระหว่างขอบกับเนื้อหาในกล่อง */

		.container {
    	padding: 16px;
		}

		/* ตัวกล่องและการแสดงผล */
		.modal {
    	display: none; /* ซ่อนไว้  จะแสดงกล่องเมื่อกดเลือธนาคาร*/
    	position: fixed; /* อยู่กับที่ */
    	z-index: 1;
    	left: 0;
    	top: 0;
    	width: 100%;
    	height: 100%;
    	background-color: rgba(0,0,0.4);
    	padding-top: 60px;
		}

		/* ส่วนบนของกล่อง (ในกล่องจะแบ่งออกเป็นสองส่วนคือ content & cancel) */
		.modal-content {
    	background-color: #fefefe;
    	margin: 5% auto 15% auto; /* ห่างจากด้านบน 5%, ห่างจากด้านล่างและcentered 15%  */
    	border: 1px solid #888; /* ทำขอบของกล่อง */
    	width: 50%;
		}

		.close:focus {
    	color: red;
    	cursor: pointer;
		}

 		.cancelbtn {
       	width: 100%;
       	max-width: 100px
 		}

	</style>
</head>
<body>
	<h1>Payment</h1>
	<img class="pic" src="pay4.jpg">
	<div  id="s">
	<p style="font-size: 70px;">Choose your bank</p>
	<pre style="font-size: 15px;">
<img class="img"  src="t1.png"height="100px"onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Thanachart Bank		<img class="img"  src="t2.png"height="100px"onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Krung Thai bank		<img class="img"  src="t3.png"height="100px"onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Bangkok Bank<br>
<img class="img"  src="t4.png"height="100px"onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Thai Commercial Bank	<img class="img"  src="t5.png"height="100px"onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Bank of Ayudhya		<img class="img"  src="t6.png"height="100px"onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Savings Bank
	</pre><br><br><br><br>
	</div>

<div id="id01" class="modal"> <!--สร้างหน้าที่มันเด้งขึ้นมาให้กรอก หลังจากที่คลิกเลือกธนาคาร-->
<?php
$total = $_GET["total"];
?>
<form action="ncode.php" class="modal-content">
<div class="container">
  <b style="font-size: 20px;">Promptpay</b><br><br>
  <b>From account number</b><br>
  <input type="text" placeholder="ใส่เลขที่บัญชี" name="account" required>
  <b>To promptpay number xxx-xxxx-xxx</b><br>
  <input type="text" placeholder="xxx-xxxx-xxx" pattern="xxx-xxxx-xxx" name="amount" required >
  <b>Name</b><br>
  <input type="text" placeholder="ใส่ชื่อของคุณ" name="name" required>
  <b>Amount = <?=$total?> ฿</b><br>
  <input type="text" placeholder="ใส่จำนวนเงิน" name="amount" pattern="<?=$total?>" required>
  
  <button type="submit">Pay</button>
</div>
<div class="container" style="background-color:#f1f1f1"><!--ทำแถบล่างสุดตรง cancle ให้เป็นสีเทา-->
  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
</div>
</form><br><br>
</div>
</body>
</html>