<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gibrosen Fire Safety Products MIS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     <script src="assets/js/jquery.min.js"></script>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script>
         $(document).ready(function(){
            <?php 
                require 'php_scripts/databaseConn.php';
                $query = $conn->query("select * from `clients`") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
            ?>
            $("#selectClient<?php echo $fetch['clientControlNo']?>").click(function(){
                $("#txtClientName").val("<?php echo $fetch['clientName']?>");
                $("#txtClientAdddress").val("<?php echo $fetch['clientAddress']?>");            
            });

                <?php
                }
                $conn->close();
                ?>

                $("#btnAddItem").click(function(){
                    var markup = "<tr><td>"+$("#itemQty").val()+"</td><td>"+$("#newItemName").val()+"</td></tr>"
                    $("#itemTable").append(markup);
                });

         });
    </script>
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
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 28 September 2018 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
             <?php
                    $page = 'transactions';
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
                    <!--FIRST ROW-->
                <div class="receipt">
                    <div class="row">
                    <div class="col-sm-12">
                        <p style="font-weight: 700;">Delivery receipt</p>
                            <hr>
                        <table>
                        
                            <tr>
                            
                                <td style="width: 150px;">
                                    <p style="padding-top: 10px;">Delivered to: </p>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-sm" style="width: 500px;margin-left: 10px;" id="txtClientName">                                        
                                </td>
                                <td>
                                     <input type="button" style="margin-left: 10px;" class="btnBlue" value="SELECT from existing" data-toggle="modal" data-target="#selectFromExisting">            
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px;">
                                    <p>Address: </p>
                                </td>
                                <td colspan="3">
                                    <input type="text" class="form-control input-sm" style="width: 100%;margin-left: 10px;" id="txtClientAdddress">
                                </td>
                            </tr>
                        </table>                                                                               
                    </div>
                </div>
                    <br>
                     <div class="row">
                <div class="col-md-12">                    
                     <button class="btn btn-primary"  data-toggle="modal" data-target="#addItems"><i class="glyphicon glyphicon-plus"></i> Add Items</button>
                    <br>
                    <br>
                    <!-- Client List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Delivery List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Quantity</th>
                                            <th style="text-align: center;">Unit</th> 
                                            <th style="text-align: center;">Item Description</th>     
                                            <th style="text-align: center;">Unit Price</th>                                            
                                            <th style="text-align: center;">Total No.</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody id="itemTable">
                                            
                                    </tbody>
                                </table>
                                <span style="float: right;">TOTAL PRICE: <input type="text" class="form-control input-sm" disabled></span>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div> 
                    <div style="margin-left: 93%;">                        
                        <input type="button" value="Print" class="btnBlue">                       
                    </div>
                </div>
                    
                
                    <!--SECOND ROW-->
                    
                 <!-- /. ROW  -->
                <hr />                                                                    
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- MODAL START -->
    <?php
        include "assets/requiredPages/modals/addItemModal.php";
    ?>
    <!-- MODAL END -->
    <!-- MODAL START -->
    <div class="modal fade" id="selectFromExisting" role="dialog" style="width: 700px; top: 20%;left: 35%;">
        <div class="modal-dialog">
                    <!-- Modal content-->                    
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Select Client</h4>           
                </div>                                           
                <div class="modal-body">                                         
                <div class="table-responsive">
                                <table class="table datatable" id="clientsTable">
                                    
                                                        <thead>
                                                            <tr>
                                                                <th>Client Control No</th>
                                                                <th>Client Name</th>                                                                
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            require 'php_scripts/databaseConn.php';
                                                            $query = $conn->query("select * from `clients`") or die(mysqli_error());
                                                            while($fetch = $query->fetch_array()){
                                                            ?>                                      
                                                            <tr>
                                                                <td><p style="padding: 0;"><?php echo $fetch['clientControlNo']?></p></td>
                                                                <td><p style="padding: 0;" id="clientName"><?php echo $fetch['clientName']?></p></td>                                                                
                                                                <td>                                                                    
                                                                    <button data-toggle="modal" class="btn btn-primary" id="selectClient<?php echo $fetch['clientControlNo']?>" data-dismiss="modal">Select</button>                                                                      
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
                <div class="modal-footer">     
                    <input type="button" class="btn btn-default" style="width: 90px;" id="btnAddItem" value="Add" data-dismiss="modal">
                    <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                </div>
            </div>  
        </div>
    </div>
    <!-- MODAL END -->
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
                $('#clientsTable').dataTable();
            });            
    </script>
</body>
</html>
