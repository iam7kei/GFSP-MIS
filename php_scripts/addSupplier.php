<?php
    session_start(); 
    include 'databaseConn.php';
    $supplierName = $_POST['supplierName'];
    $supplierEmail = $_POST['supplierEmail'];
    $supplierContactNo = $_POST['supplierContactNo'];
    $suppliertAddress = $_POST['supplierAddress'];
    $supplierContactPerson = $_POST['supplierContactPerson'];
 
        $sql = "INSERT INTO suppliers (supplierName, supplierAddress,supplierContactNo,supplierEmail,supplierContactPerson) values ('$supplierName','$suppliertAddress','$supplierContactNo','$supplierEmail','$supplierContactPerson')";
        $result = $conn->query($sql);
        header('Location: ../master-file_suppliers.php');

?>