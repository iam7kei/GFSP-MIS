<?php
    session_start(); 
    include 'databaseConn.php';
    $employeeID = $_POST['employeeID'];    
    $sql = "SELECT * FROM employees WHERE employeeID='$employeeID'";
    $result = $conn->query($sql);   

    if(!$row = $result->fetch_assoc()){        
        header('Location: ../master-file_employees.php');
    }else{
        $sql = "DELETE FROM `employees` WHERE `employees`.`employeeID` = '$employeeID'";
        $result = $conn->query($sql);
        header('Location: ../master-file_employees.php');
    }
?>