<?php
require_once('function.php');
connectdb();
session_start();



if(isset($_POST["email"]) or isset($_POST["password"])){

sleep(1);


//$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$mdpass = md5($password);
include_once('connection.php');
$insertuserdata = mysqli_query($conms,"INSERT INTO users (email,password) VALUES ('".$email."','".$mdpass."')");
if ($insertuserdata) {
	echo "Registration Successful";
}else{
	echo "OOP... and error occure while trying to register user";
}  //end else
exit();
}
?>