<?php 
    session_start(); 
    include 'databaseConn.php';
    $username = $_POST['usernameUpdate'];    
    $password= $_POST['passwordUpdate'];    
    $userID = $_POST['userID'];
        $sql = "UPDATE `users` SET `username` = '{$username}', `password` = '{$password}' WHERE `users`.`userID` = $userID";
        $result = $conn->query($sql);
        header('Location: ../settings-user_accounts.php');

?>