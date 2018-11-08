<?php
    session_start(); 
    include 'databaseConn.php';
    $clientName = $_POST['clientName'];
    $clientEmail = $_POST['clientEmail'];
    $clientContactNo = $_POST['clientContactNo'];
    $clientAddress = $_POST['clientAddress'];
    $clientContactPerson = $_POST['clientContactPerson'];
 
        $sql = "INSERT INTO clients (clientName, clientAddress,clientContactNo,clientEmail,clientContactPerson) values ('$clientName','$clientAddress','$clientContactNo','$clientEmail','$clientContactPerson')";
        $result = $conn->query($sql);
        header('Location: ../master-file_client.php');

?>