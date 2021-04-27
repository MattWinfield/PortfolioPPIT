<?php

include "../connect.php";
$conn = connectFunc();

    $email = $_POST['Email'];
    $date = date("d/m/Y");

    $reg= " insert into newsletter(
        SubEmail, SubDate
        ) values ('$email', '$date')";
    mysqli_query($conn, $reg);
?>