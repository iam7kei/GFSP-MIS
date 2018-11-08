<?php
    session_start(); 
    include 'databaseConn.php';
    $username = $_POST['username'];
    $userOwner = $_POST['userOwner'];
    $password= $_POST['userPassword'];    
    $sql = "INSERT INTO users (username, password, userOwner) values ('$username','$password','$userOwner')";
    $result = $conn->query($sql);
    header('Location: ../settings-user_accounts.php');
?>