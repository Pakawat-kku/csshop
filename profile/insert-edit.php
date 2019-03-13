<?php
include "../connect.php";

session_start();

$rootFolder = "/csshop/";

if(!isset($_SESSION["username"]) || $_SESSION["username"] ==""){
    echo ('<script> alert("Not found any profile, Please login first."); window.location="../signin/signin.php";</script>');
    return ;
}

if($_POST["password"] != $_POST["con-pass"]){
    echo ("<script> alert('Password not match!'); window.location='edit-pro.php';</script>");
    exit();
    }
    
   /* $stmt=$pdo->prepare('UPDATE customer SET pname=:pname,email=:email,password=:password,address=:address,province=:province,postalCode=:postalCode WHERE username="'.$_SESSION["username"].'"');
    $stmt->bindParam(':pname',$_POST['pname'], PDO::PARAM_STR);
    $stmt->bindParam(':email',$_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':password',md5($_POST['password']), PDO::PARAM_STR);
    $stmt->bindParam(':address',$_POST['address'], PDO::PARAM_STR);
    $stmt->bindParam(':province',$_POST['province'], PDO::PARAM_STR);
    $stmt->bindParam(':postalCode',$_POST['postalCode'], PDO::PARAM_STR);
    $stmt->execute();
    echo ("<script> alert('submit seccessfully!'); window.location='profile.php';</script>");*/   
    
    
    $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
    $objDB = mysql_select_db("csshop");
    $strSQL = 'UPDATE customer SET ';

    if($_POST['name'] != ""){
$strSQL .="pname = '".$_POST['name']."' ";
    }
    if($_POST['name'] == ""){
        $strSQL .="pname = pname ";
            }

    //$strSQL .=",username = '".$_POST["username"]."' ";

    if($_POST['email'] != ""){
$strSQL .=" ,email = '".$_POST['email']."' ";
    }
    if($_POST['email'] == ""){
        $strSQL .=" ,email = email ";
            }

    if($_POST['password'] != ""){
    $strSQL .=",password = '".md5($_POST['password'])."' ";
}
if($_POST['password'] == ""){
    $strSQL .=",password = password ";
}

    if($_POST['address'] != ""){
    $strSQL .=",address = '".$_POST['address']."' ";
}
if($_POST['address'] == ""){
    $strSQL .=",address = address ";
}

    if($_POST['province'] != ""){
    $strSQL .=",province = '".$_POST['province']."' ";
}
if($_POST['province'] == ""){
    $strSQL .=",province = province ";
}

    if($_POST['postalCode'] != ""){
    $strSQL .=",postalCode = '".$_POST['postalCode']."' ";
}
if($_POST['postalCode'] == ""){
    $strSQL .=",postalCode = postalCode ";
}

    $strSQL .="WHERE username = '".$_SESSION['username']."' ";
    $objQuery = mysql_query($strSQL);
        echo ("<script> alert('submit seccessfully!'); window.location='profile.php';</script>");
    

?>