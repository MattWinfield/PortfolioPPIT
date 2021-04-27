<?php
	include "../connect.php";

    $conn = connectFunc();
    
    $formName = $_POST['Username'];
    $formPass = $_POST['Password'];

    $sql= "SELECT * FROM users WHERE Username = '$formName'";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $dbPass = $row['Password'];
		$dbEmail = $row['Email'];
    }

	if(isset($_POST['login'])){
		if ($formPass==$dbPass){
			setcookie('Username',$formName,time()+(60*60*7), "/");
				session_start();
				$_SESSION['Username']= $formName;
				$_SESSION['Email']= $dbEmail;
				header("location: ../PAGES/account.php");
		}else {
			echo "Username or password is Invalid.<br><a href='../PAGES/login.php'>click here to Try Again</a> ";
		}
	}
?>