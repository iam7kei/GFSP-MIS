<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gibrosen Fire Safety Products MIS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="assets/js/jquery.min.js"></script>
   <script>
      $(document).ready(function(){
        $("#selectClientId").change(function(){
                   var clientName = $("#selectClientId option:selected").val();                
                   $('#txtClientName').val(clientName);                  
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
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> Last access : 28 September 2018 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
             <?php
                    $page = "transactions";
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
                
                      <!--TABS-->
                    
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#purchaseOrder">Purchase Order</a></li>
                            <li><a data-toggle="tab" href="#salesInvoice">Sales Invoice</a></li>    
                        </ul>

  <div class="tab-content">
    <div id="purchaseOrder" class="tab-pane fade in active">
     <div class="row">
                    <div class="col-sm-12">
                        <p style="font-weight: 700;">Purchase Order</p>
                            <hr>
                        <table>
                        <tr>
                            <td>
                                <p style="padding-top: 10px; margin-right: 10px;">Client:</p> 
                            </td>
                            <td>
                                <select class="form-control" id="selectClientId">
                                            <option>
                                               --SELECT CLIENT ID--
                                            </option>
                                            <?php
                                                            require 'php_scripts/databaseConn.php';
                                                            $query = $conn->query("select * from `clients`") or die(mysqli_error());
                                                            while($fetch = $query->fetch_array()){
                                                            ?>  
                                                                <option value="<?php echo $fetch['clientName']?>">
                                                                    <?php 
                                                                        echo $fetch['clientControlNo']
                                                                    ?>
                                                                </option>
                                                            <?php 
                                                            }
                                                            $conn->close();
                                                            ?>
                                        </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" disabled style="width: 550px; margin-left: 10px;" id="txtClientName">
                            </td>                            
                        </tr>
                            <tr>
                                <td>
                                    <p>TERMS:</p>  
                                </td>
                                <td>
                                     <select style="font-weight: normal; padding: 2px;" class="form-control">
                                            <option>
                                                --SELECT PAYMENT TERM--
                                            </option>
                                        </select>
                                </td>
                            </tr>
                    </table>                                                                                                                            
                    </div>
                </div>                                                       
                                <div class="row">
                                <div class="col-md-12">                    
                     <button class="btn btn-primary"  data-toggle="modal" data-target="#addItems" "><i class="glyphicon glyphicon-plus"></i> Add Items</button>
                    <br>
                    <br>
                    <!-- Client List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Order List
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
                                    <tbody>
                                    <?php
                                            require 'php_scripts/databaseConn.php';
                                            $query = $conn->query("select * from `sales`") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                            ?>      
                                            <tr>
                                                <td><?php echo $fetch['quantity']?></td>
                                                <td><?php echo $fetch['unit']?></td>
                                                <td><?php echo $fetch['itmDesc']?></td>
                                                <td><?php echo $fetch['unitPrice']?></td>
                                                <td><?php echo $fetch['totalNum']?></td>
                                                <td>
                                                <?php
                                            }
                                            $conn->close();
                                            ?>    
                                            </tr>
                                    </tbody>
                                </table>
                                <span style="float: right;">TOTAL PRICE: <input type="text" class="form-control" disabled value="100,000"></span>
                            </div>                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                                </div> 
                                <div style="margin-left: 79%;">                                                                                
                                                            <a data-toggle="tab" href="#salesInvoice"><input type="button" value="Proceed to Sales Invoice" class="btnBlue"></a>                       
                                                        </div>         
    </div>
    <div id="salesInvoice" class="tab-pane fade">
      <div class="row">
                    <div class="col-sm-12">
                        <p style="font-weight: 700;">Sales Invoice</p>
                            <hr>
                            <table>
                                <tr>
                                    <td>
                                         <p style="margin-right: 10px; padding-top: 10px;">Name: </p> 
                                    </td>
                                    <td colspan="2">
                                        <input type="text" class="form-control" style="width: 400px; margin-right: 15px;" > 
                                    </td>
                                    <td><p  style="margin-right: 10px; padding-top: 10px;">SO #:</p></td>
                                    <td> <input type="text" class="form-control" style="width: 200px;"></td>
                                    <td>
                                        <p style="margin-left: 10px; margin-right: 10px; padding-top: 10px;">Date:</p>
                                    </td>
                                    <td> <input type="date" class="form-control" style="width: 160px;"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="margin-right: 10px;p padding-top: 10px; width">Business Style:</p>                        
                                    </td>
                                    <td colspan="2">
                                        <input type="text" class="form-control" style="margin-right: 10px; width: 400px;">
                                    </td>
                                    <td>
                                        <p style="margin-right: 10px;">P.O. #: </p>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" style="width: 200px;" disabled>
                                    </td>
                                    <td>
                                        <p style="margin-left: 10px;">P.R. #:</p>
                                    </td>
                                    <td>
                                         <input type="text" class="form-control" style="width: 160px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Address:</p>
                                    </td>
                                    <td colspan="6">
                                         <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>TERMS:</p>                                    
                                    </td>
                                    <td colspan="2">
                                        <select style="font-weight: normal; padding: 2px; width: 250px;" class="form-control">
                                                <option>
                                                    --SELECT PAYMENT TERM--
                                                </option>
                                            </select>
                                    </td>
                                    <td>
                                        <p style="margin-right: 10px;">DATE:</p>
                                    </td>
                                    <td> <input type="date" class="form-control" style="margin-right: 10px;"></td>
                                    <td>
                                        <p style="margin-left: 10px;">salesman</p>
                                    </td>
                                    <td>
                                        <select style="font-weight: normal; padding: 2px;" class="form-control">
                                                <option>
                                                    --SELECT SALESMAN--
                                                </option>
                                            </select>
                                    </td>
                                </tr>
                            </table>
                    </div>
                </div>                    
                     <div class="row">
                <div class="col-md-12">                    
                     <button class="btn btn-primary"  data-toggle="modal" data-target="#addItems"><i class="glyphicon glyphicon-plus"></i> Add Items</button>
                    <br>
                    <br>
                    <!-- Client List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Order List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Product No.</th>
                                            <th style="text-align: center;">Item Description</th>
                                            <th style="text-align: center;">Unit Price</th>
                                            <th style="text-align: center;">Total No.</th>                                            
                                        </tr>
                                    </thead>
                                                                       
                                </table>
                                <span style="float: right;">TOTAL PRICE: <input type="text" class="receipt-input" disabled></span>
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
  </div>
</div>
                    <!--TABS END-->
                
                    <!--FIRST ROW-->                                                                                                                                                           
                    <!--SECOND ROW-->
                    
                 <!-- /. ROW  -->    
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
    
   <!--MODALS-->
    <div class="modal fade" id="addItems" role="dialog" style="width: 50%; top: 20%;left: 35%;">
                <form method="post" action="php_scripts/addClientPO.php">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Add Items</h4>           
                                        </div>                                           
                                        <div class="modal-body" style="font-weight: 550; text-transform: uppercase;">    
                                            <table>
                                                <tr>     
                                                    <td>
                                                        ITEM:     
                                                    </td>
                                                    <td>
                                                    <select style="font-weight: normal; margin-left: 5%; margin-right: 5%;" name="itemType" class="form-control">
                                                    <option>
                                                        --SELECT PRODUCT TYPE--
                                                    </option>
                                                    <?php
                                                        echo "<option>";
                                                        echo "Fire Extinguisher";
                                                        echo "</option>";
                                                        echo "<option>";
                                                        echo "Smoke Detecor";
                                                        echo "</option>";
                                                    ?>
                                                </select>
                                                    </td>
                                                    <td colspan="2">
                                                    <select style="font-weight: normal; width: 100%; margin-left: 10%;" name="item" class="form-control">
                                                    <option>
                                                        --SELECT ITEM--
                                                    </option>
                                                    <?php
                                                        echo "<option>";
                                                        echo "Fire Extinguisher";
                                                        echo "</option>";
                                                        echo "<option>";
                                                        echo "Smoke Detecor";
                                                        echo "</option>";
                                                    ?>
                                                </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="margin-top: 5%; margin-left: 5%;">Quantity: </p>
                                                    </td>
                                                    <td>
                                                    <input type="number" name="quantity"  class="form-control" style="margin-left: 5%; margin-top: 5%; width: 70px; padding: 5px; font-weight: normal;">
                                                    </td>
                                                    <td>Unit Price: </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled style="width: 150px;">
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
                                        
</body>
</html>