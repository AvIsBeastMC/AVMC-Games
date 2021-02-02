<?php
    $server = "sql303.unaux.com";
    $username = "unaux_26602531";
    $password = "2tjeeitaft5";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this MySQL Database failed because " . mysqli_connect_error());
    }
    // Successful Connection
    echo "Successfully Connected to the MySQL Server!";
?>