<?php
    $server = "localhost";
    $user = "kyle";
    $password ="123456";
    $dbname = "smart_home";
    $conn = mysqli_connect($server,$user,$password,$dbname);

    // Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>