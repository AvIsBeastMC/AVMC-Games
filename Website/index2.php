<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con= mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to the Database failed due to " . mysqli_connect_error());
    }
    // echo "Successfully Connected to PHPMyAdmin's Database!"
    echo "Successfully Connected to PHPMyAdmin's Database!"
?>      