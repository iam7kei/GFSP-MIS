<?php
    session_start(); 
    include 'databaseConn.php';
    $clientControlNo = $_POST['clientControlNo'];    
    $sql = "SELECT * FROM clients WHERE clientControlNo='$clientControlNo'";
    $result = $conn->query($sql);   

    if(!$row = $result->fetch_assoc()){        
        header('Location: ../master-file_client.php');
    }else{
        $sql = "DELETE FROM `clients` WHERE `clients`.`clientControlNo` = '$clientControlNo'";
        $result = $conn->query($sql);
        header('Location: ../master-file_client.php');
    }    
?>