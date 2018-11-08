<?php 
    session_start(); 
    include 'databaseConn.php';
    $supplierID = $_POST['supplierID'];
    $supplierNameUpdate = $_POST['supplierNameUpdate'];
    $supplierEmailUpdate = $_POST['supplierEmailUpdate'];
    $supplierContactNoUpdate = $_POST['supplierContactNoUpdate'];
    $supplierAddressUpdate = $_POST['supplierAddressUpdate'];
    $supplierContactPersonUpdate = $_POST['supplierContactPersonUpdate'];
    $sql = "SELECT * FROM suppliers WHERE supplierID='$supplierID'";
    $result = $conn->query($sql);   

        $sql = "UPDATE `suppliers` SET `supplierName` = '{$supplierNameUpdate}', `supplierAddress` = '{$supplierAddressUpdate}', `supplierContactNo` = '{$supplierContactNoUpdate}', `supplierEmail` = '{$supplierEmailUpdate}', `supplierContactPerson` = '{$supplierContactPersonUpdate}' WHERE `suppliers`.`supplierID` = $supplierID";
        $result = $conn->query($sql);
        header('Location: ../master-file_suppliers.php');

?>