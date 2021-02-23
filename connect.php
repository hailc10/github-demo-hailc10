<?php
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "qlthuvien";
    
    $conn =  new mysqli($server,$user,$pass,$dbname);

    if($conn->connect_error){
        die("connect failed : ".mysqli_connect_error());
    }
?>