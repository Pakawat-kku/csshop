
<?php
include "../connect.php";
$rootFolder = "/csshop/";

if(trim($_POST["username"]) == ""){	
echo ("<script> alert('Please input Username!'); window.location='signup.php';</script>");
exit();
}

if(trim($_POST["password"]) == ""){
echo ("<script> alert('Please input Password!'); window.location='signup.php';</script>");
exit();
}  

if($_POST["password"] != $_POST["conpassword"]){
echo ("<script> alert('Password not match!'); window.location='signup.php';</script>");
exit();
}

if(trim($_POST["name"]) == ""){
echo ("<script> alert('Please input Name!'); window.location='signup.php';</script>");
exit();
}  

if($_POST["email"] ==""){
	echo ("<script> alert('Please input E-mail!'); window.location='signup.php';</script>");
	exit();
	}

	if($_POST["address"] ==""){
		echo ("<script> alert('Please input Address!'); window.location='signup.php';</script>");
		exit();
		}

		if($_POST["province"] ==""){
			echo ("<script> alert('Please input Province!'); window.location='signup.php';</script>");
			exit();
			}

			if($_POST["code"] ==""){
				echo ("<script> alert('Please input Postal Code!'); window.location='signup.php';</script>");
				exit();
				}

			/*	$username = $_REQUEST["username"];
				$password = $_REQUEST["password"];
		// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
			$check = ("SELECT * FROM customer  WHERE username = '$username' ");
			  $result1 = mysql_query($check) or die(mysql_error());
				$num=mysql_num_rows($result1); 
				if($num > 0)   		
				{
		//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
					 echo "<script>";
					 echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
					 echo "window.location='signup.php';";
					   echo "</script>";
		 
				}else{*/
			

				$stmt = $pdo->prepare("INSERT INTO customer VALUES ( '',?, ?, ?, ?, ?, ?, ?)");
				$stmt->bindParam(1, $_POST["name"]);
				$stmt->bindParam(2, $_POST["username"]);
				$stmt->bindParam(3, $_POST["email"]);
				$stmt->bindParam(4, md5($_POST["password"]));
				$stmt->bindParam(5, $_POST["address"]);
				$stmt->bindParam(6, $_POST["province"]);
				$stmt->bindParam(7, $_POST["code"]);
				
				$stmt->execute(); // เริ่มเพิ่มข้อมูล
				$pid = $pdo->lastInsertId(); // ขอคยี ห์ ลกัทเี่ พมิ่ สา เร็จ
					
					/*echo "Register Completed!=$pid<br>";
				
					echo "<br> Go to <a href='../signin/signin.php'>Login page</a>";*/
				/*}*/
?>
