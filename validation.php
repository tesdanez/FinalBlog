<?php
session_start();
$con = mysqli_connect('localhost', 'root','', 'dbuser');
mysqli_select_db($con, 'dbuser');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "SELECT * from tbluser where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num > 0) {
 	$_SESSION['username'] = $username;
 	header('location:setting_page.php');

} else {
	header('location:sub_set.php');
	
}
?>