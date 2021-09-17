<?php
    $host = "sql303.epizy.com";
    $username = "epiz_27232696";
    $password = "Avdael8PaB";
    $db_name = "epiz_27232696_bank";

    $conn = mysqli_connect("$host","$username","$password") or die("cannot connect");

    mysqli_select_db($conn,"$db_name") or die ("connect select DB");
?>
