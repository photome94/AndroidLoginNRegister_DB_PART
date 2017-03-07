<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','androidapp');

    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, age, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssis", $name, $username, $age, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);

    
?>