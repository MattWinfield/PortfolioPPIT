<?php

function connectFunc(){
    $dbhost = "localhost";
    $dbuser = "justadec_admin";
    $dbpassword = "Summerfield989032";
    $dbname = "justadec_authlogin";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

    if (mysqli_connect_errno()) {
        die("DB conn failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")");
    }


    return $conn;    
}

?>