<?php
	include "../connect.php";
    $conn = connectFunc();
    session_start();

    if(isset($_COOKIE['Username'])) {
        unset($_COOKIE['Username']); 
        setcookie('Username', null, -1, '/'); 
        header("location: ../PAGES/login.php");
    }else{
        header("location: ../index.html");
    }


?>