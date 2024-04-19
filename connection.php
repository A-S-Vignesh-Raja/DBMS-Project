<?php
    $servername='localhost';
    $username='root';
    $password='viki2003';
    $dbname = "my_db";
    $con=mysqli_connect($servername,$username,$password,$dbname);
    if(!$con){
        die("Connection failed: " .mysqli_connect_error());
    }
?>
