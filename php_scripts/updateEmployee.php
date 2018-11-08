<?php 
    session_start(); 
    include 'databaseConn.php';
    $employeeID = $_POST['employeeID'];
    $employeeNameUpdate = $_POST['employeeNameUpdate'];
    $employeeEmailUpdate = $_POST['employeeEmailUpdate'];
    $employeeContactNoUpdate = $_POST['employeeContactNoUpdate'];
    $employeeAddressUpdate = $_POST['employeeAddressUpdate'];
    $employeePositionUpdate = $_POST['employeePositionUpdate'];
    $sql = "SELECT * FROM members WHERE employeeID='$employeeID'";
    $result = $conn->query($sql);   
        $sql = "UPDATE `employees` SET `employeeName` = '{$employeeNameUpdate}', `employeeAddress` = '{$employeeAddressUpdate}', `employeeContactNo` = '{$employeeContactNoUpdate}', `employeeEmail` = '{$employeeEmailUpdate}', `employeePosition` = '{$employeePositionUpdate}' WHERE `employees`.`employeeID` = $employeeID";
        $result = $conn->query($sql);
        header('Location: ../master-file_employees.php');

?>