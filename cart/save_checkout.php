<!-- ถ้ามีเวลาเหลือค่อยมาดู -->
<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("csshop");

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orders (OrderDate,Name)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."') ";
  mysql_query($strSQL) or die(mysql_error());

  $strOrderID = mysql_insert_id();

  for($i=1;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strpid"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (OrderID,pid,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strpid"][$i]."','".$_SESSION["strQty"][$i]."') 
			  ";
			  mysql_query($strSQL) or die(mysql_error());
	  }
  }

mysql_close();

session_destroy();

header("location:forder.php?OrderID=".$strOrderID);
?>