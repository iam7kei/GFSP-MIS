<?php

include 'databaseConn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$kei = '';
    
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
    header('Location: ../login.php');
}else{
    $_SESSION['ID'] = $row['ID'];    
    $_SESSION['USERNAME'] = $row['USERNAME'];
    header("Location: ../index.php");
}
?>