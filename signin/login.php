<?php
session_start();
include "../include/db.php";

if(!isset($_POST['username']) || $_POST['username']==""){
    echo ('<script> alert("Username not found"); window.location="signin.php";</script>');
}
if(!isset($_POST['password']) || $_POST['password']==""){
    echo ('<script> alert("Password not found"); window.location="signin.php";</script>');
}
$sql='SELECT * FROM customer WHERE username="'.$_POST["username"].
'" and password="'.md5($_POST["password"]).'" limit 1';

$db = new DB();
$user = $db->Query($sql);

if(!isset($user[0]['username']) || !$user[0]['username']){
    echo ('<script> alert("Invalid username or password."); window.location="signin.php";</script>');
}

$_SESSION['username']=$user[0]['username'];
$_SESSION['name']=$user[0]['pname'];
echo ('<script> alert("Login seccessfully."); window.location="../index.php";</script>');

?>