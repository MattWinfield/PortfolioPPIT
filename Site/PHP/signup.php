<?php
include "../connect.php";
$conn = connectFunc();

$name = $_POST['Username'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$checkpass = $_POST['RepPassword'];

$size = $_POST['sizes'];
$fullname = $_POST['FullName'];
$stadd = $_POST['StrAddress'];
$city = $_POST['City'];
$country = $_POST['Country'];
$pcode = $_POST['PostCode'];






$sql= "SELECT * FROM users WHERE Username = '$name'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

$sql= "SELECT * FROM users WHERE Email = '$email'";
$result = mysqli_query($conn,$sql);
$mail = mysqli_num_rows($result);

if ($pass != $checkpass){
	echo" Passwords must match <a href='../PAGES/login.php'>click here to Try Again</a>";
}else if($num==1 || $mail==1){
	echo" Username or Email Already Taken  <a href='../PAGES/login.php'>click here to Try Another</a>";
}else{
	$reg= " insert into users(
		Username, Email, Password, Size, FullName, StreetAddress, City, Country, PCode
		) values ('$name', '$email', '$pass', '$size', '$fullname', '$stadd', '$city', '$country', '$pcode')";
	mysqli_query($conn, $reg);
    session_start();
	setcookie('Username',$name,time()+(60*60*7), "/");
    $_SESSION['Username']= $name;
	$_SESSION['Email']= $email;
    header("location: ../PAGES/account.php");
}
?>