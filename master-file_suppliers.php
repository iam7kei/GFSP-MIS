<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
        include "php_scripts/databaseConn.php";
    ?>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gibrosen Fire Safety Products MIS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">GFSP MIS</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> Last access : 20 September 2018 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <?php
                    include "assets/requiredPages/sideNav.php";    
                ?>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">                    
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                     <button class="btn btn-primary"  data-toggle="modal" data-target="#addNewSupplier"><i class="glyphicon glyphicon-plus"></i> Add New Supplier</button>
                    <br>
                    <br>
                    <!-- Client List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Supplier List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Supplier Name</th>
                                            <th style="text-align: center;">E-Mail</th>
                                            <th style="text-align: center;">Contact No.</th>
                                            <th style="text-align: center;">Supplier Address</th>
                                            <th style="text-align: center;">Contact Person</th>
                                            <th style="text-align: center;">Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require 'php_scripts/databaseConn.php';
                                            $query = $conn->query("select * from `suppliers`") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>                                                            
                                                <td><?php echo $fetch['supplierName']?></td>
                                                <td><?php echo $fetch['supplierEmail']?></td>
                                                <td><?php echo $fetch['supplierContactNo']?></td>
                                                <td><?php echo $fetch['supplierAddress']?></td>
                                                <td><?php echo $fetch['supplierContactPerson']?></td>
                                                <td>
                                                    <div class="btn-group">
                                                    <button href="#edit<?php echo $fetch['supplierID'];?>" data-target="#edit<?php echo $fetch['supplierID'];?>" data-toggle="modal" class="btn btn-primary"><i class='fa fa-pencil' style='margin-right: 5px;'></i>Edit</button>
                                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
                                                    <ul class="dropdown-menu" style="background-color: #d9534f">
                                                        <form action="php_scripts/deleteSupplier.php" method="post" method="post" onsubmit="return confirm('Are you sure you want to delete <?php echo $fetch['supplierName']?>?');" >
                                                            <input type="hidden" value="<?php echo $fetch['supplierID']?>" name="supplierID">
                                                            <input type="submit" class="btn btn-danger" style="border: 0;" value="Delete">
                                                        </form>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            $conn->close();
                                            ?>
                                    </tbody>                                    
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>                                            
                <!-- /. ROW  -->            
                <!-- /. ROW  -->
        </div>
               
    </div>
        
        
        <!--Delete Modal-->
        
        <div class="modal fade" id="confirmDeleteModal" role="dialog" style="width: 20%; margin-left: 45%; margin-top: 300px;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Confirm Delete?</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                       
                                        </div>
                                        <div class="modal-footer">                                           
                                        </div>
                                      </div>                                        
								</div>
							</div>
        
        <!--END OF DELETE MODAL-->
                        <!-- ADD NEW SUPPLIER Modal -->
                        <div class="modal fade" id="addNewSupplier" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                        <form action="php_scripts/addSupplier.php" method="post" method="post" onsubmit="return confirm('Are you sure you want to add this New Supplier?');" >
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">New Supplier</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Supplier Name
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" aria-controls="dataTables-example" name="supplierName">
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="supplierEmail">
                                                </td>    
                                                </tr>                                           
                                                <tr>
                                                <td>
                                                    Contact No.
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="supplierContactNo">
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Supplier Address
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="supplierAddress">
                                                </td>    
                                                </tr>                                             
                                                <tr>
                                                <td>
                                                    Contact Person
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="supplierContactPerson">
                                                </td>    
                                                </tr>                                                
                                        </table>
                                        </div>
                                        <div class="modal-footer">     
                                            <input type="submit" class="btn btn-default" style="width: 90px;" value="Add">
                                            
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                        </div>                                          
                                      </div>   
                                        </form>
								</div>
							</div>
                <?php
                                            require 'php_scripts/databaseConn.php';
                                            $query = $conn->query("SELECT * FROM `suppliers`") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                        ?>
                        <div class="modal fade" id="edit<?php echo $fetch['supplierID'];?>" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                        <form action="php_scripts/updateSupplier.php" method="post">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Edit</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                     Name
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" aria-controls="dataTables-example" value="<?php echo $fetch['supplierName']?>" name="supplierNameUpdate">
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['supplierEmail']?>" name="supplierEmailUpdate">
                                                </td>    
                                                </tr>                                           
                                                <tr>
                                                <td>
                                                    Contact No.
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['supplierContactNo']?>" name="supplierContactNoUpdate">
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Supplier Address
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['supplierAddress']?>" name="supplierAddressUpdate">
                                                </td>    
                                                </tr>                                             
                                                <tr>
                                                <td>
                                                    Contact Person
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['supplierContactPerson']?>" name="supplierContactPersonUpdate">
                                                </td>    
                                                </tr>                                                
                                        </table>
                                        </div>
                                        <div class="modal-footer">     
                                            <input type="hidden" value="<?php echo $fetch['supplierID']?>" name="supplierID">
                                            <input type="submit" class="btn btn-default" style="width: 90px;" value="Save">
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                        </div>
                                      </div> 
                                    </form>
								</div>
							</div>   
        <?php
                                            }
                                                ?>
         <div class="confirmAdd" >
        <div class="modal fade" id="confirmAddModal" role="dialog" style="width: 16%; top: 35%;left: 45%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >                                                                                 
                                        <div class="modal-body">   
                                            <h4 class="modal-title">Add New Supplier    ?</h4>
                                            <br>
                                            <center>
                                                <a href="#" class="btn btn-default" style="width: 90px;"  data-dismiss="modal">Yes</a>
                                                <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>                                          
                                            </center>
                                        </div>                                       
                                      </div>                                        
								</div>
							</div>
        </div>
        <div class="confirmAdd" >
        <div class="modal fade" id="confirmSaveModal" role="dialog" style="width: 16%; top: 35%;left: 45%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >                                                                                 
                                        <div class="modal-body">   
                                            <h4 class="modal-title">Save Changes?</h4>
                                            <br>
                                            <center>
                                                <a href="#" class="btn btn-default" style="width: 90px;"  data-dismiss="modal">Yes</a>
                                                <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                            </center>
                                        </div>                                       
                                      </div>                                        
								</div>
							</div>
        </div>
                    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>