<?php 
    session_start(); 
    include 'databaseConn.php';
    $clientControlNo = $_POST['clientControlNo'];
    $clientNameUpdate = $_POST['clientNameUpdate'];
    $clientEmailUpdate = $_POST['clientEmailUpdate'];
    $clientContactNoUpdate = $_POST['clientContactNoUpdate'];
    $clientAddressUpdate = $_POST['clientAddressUpdate'];
    $clientContactPersonUpdate = $_POST['clientContactPersonUpdate'];
    $sql = "SELECT * FROM members WHERE clientControlNo='$clientControlNo'";
    $result = $conn->query($sql);   

  
        $sql = "UPDATE `clients` SET `clientName` = '{$clientNameUpdate}', `clientAddress` = '{$clientAddressUpdate}', `clientContactNo` = '{$clientContactNoUpdate}', `clientEmail` = '{$clientEmailUpdate}', `clientContactPerson` = '{$clientContactPersonUpdate}' WHERE `clients`.`clientControlNo` = $clientControlNo";
        $result = $conn->query($sql);
        header('Location: ../master-file_client.php');

?>