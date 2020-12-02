<?php
    // Database credentials
    $servername = "den1.mysql4.gear.host";
    $username   = "iotjavo";
    $password   = "Vq5XV9!!O4RQ";
    $dbname     = "iotjavo";
    $tbname     = "sensorJose";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>