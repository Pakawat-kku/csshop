<?php
ob_start();
session_start(); //ตรงมีทุกอันที่เกี่ยวกับsession

if(!isset($_SESSION["username"]) ||$_SESSION["username"] ==""){
	echo ('<script> alert("Not found any profile, Please login first."); window.location="signin/signin.php";</script>');
	return ;
}
//ตรงนี้คือการจำกัดไม่ให้userที่ยังไม่loginเข้าหน้านี้ได้ ด้วยการเช็คโดยisset คือดูว่าsession['username]มีค่ารึเปล่า

if(!isset($_SESSION["intLine"]))
{

	 $_SESSION["intLine"] = 0;
	 $_SESSION["strpid"][0] = $_GET["pid"];
	 $_SESSION["strQty"][0] = 1;

	 header("location:show.php");
} //ประกาศและรับpidที่ส่งมา
else
{
	
	$key = array_search($_GET["pid"], $_SESSION["strpid"]); //ใช้ค้นหาข้อความที่กำหนดในarray โดยจะคืนค่าคีย์แรกที่พบ
	if((string)$key != "")
	{
		 $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
	} //เช็คค่าว่ามันไม่ว่าง
	else
	{
		
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strpid"][$intNewLine] = $_GET["pid"];
		 $_SESSION["strQty"][$intNewLine] = 1;
	}
	//
	 header("location:show.php");

}
?>
