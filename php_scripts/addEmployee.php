<?php
    session_start(); 
    include 'databaseConn.php';
    $employeeName = $_POST['employeeName'];
    $employeeEmail = $_POST['employeeEmail'];
    $employeeContactNo = $_POST['employeeContactNo'];
    $employeeAddress = $_POST['employeeAddress'];
    $employeePosition = $_POST['employeePosition'];
 
        $sql = "INSERT INTO employees (employeeName, employeeAddress,employeeContactNo,employeeEmail,employeePosition) values ('$employeeName','$employeeAddress','$employeeContactNo','$employeeEmail','$employeePosition')";
        $result = $conn->query($sql);
        header('Location: ../master-file_employees.php');

?>