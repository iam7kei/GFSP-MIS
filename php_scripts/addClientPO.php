<?php
    session_start(); 
    include 'databaseConn.php';
    $itemType = $_POST['itemType'];
    $itmDesc = $_POST['item'];
    $quantity = $_POST['quantity'];

 
        $sql = "INSERT INTO sales (itmDesc, quantity) values ('$itmDesc','$quantity')";
        $result = $conn->query($sql);
        header('Location: ../transactions-sales.php');

?>