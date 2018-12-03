<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
        require "php_scripts/databaseConn.php";
    ?>
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
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="assets/js/jquery.min.js"></script>
   <script>
        $(document).ready(function(){
                $("#selectSupplierID").change(function(){
                   var supplierName = $("#selectSupplierID option:selected").val();                
                   $('#txtSupplierName').val(supplierName);
                });
                
                $("#btnAddItem").click(function(){
                    var itmType = $("#selectItemType option:selected").val();
                    var markup = "<tr><td>"+itmType+"</td><td>"+$("#newItemName").val()+"</td><td>"+$("#itemQty").val()+"</td><td><button class='btnDeleteItem btn btn-danger'><i class='glyphicon glyphicon-trash' style='margin-right: 5px;'></i>Delete</button></td></tr>"
                    $("#tblOrderedItems").append(markup);
                });
                $("#orderedItemsTbl").on('click', '.btnDeleteItem', function(){
                    $(this).closest('tr').remove();
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
                <?php
                    require 'php_scripts/databaseConn.php';
                    $query = $conn->query("select * from `suppliers`") or die(mysqli_error());
                    ?>   
                    <div class="row">
                    <div class="col-sm-12">
                        <p style="font-weight: 700;">Purchase</p>
                            <hr>
                        <table>
                        <tr>
                            <td>
                                <p style="padding-top: 10px; margin-right: 10px;">Supplier:</p> 
                            </td>
                            <td>
                                <select class="form-control" id="selectSupplierID">
                                <option value="" data-email="">--SELECT SUPPLIER--</option>
                                    <?php
                                        while($fetch = $query->fetch_array()){
                                    ?>
                                            <option value="<?php echo $fetch['supplierName']?>" id="selectID">
                                            
                                            <?php echo $fetch['supplierID']?> <!-- shows ID -->
                                            
                                            </option>
                                            <?php
                                        }
                                        ?>
                                        </select>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control" disabled style="width: 600px; margin-left: 10px;" id="txtSupplierName">
                            </td>
                            <!-- 
                            <td>
                                <input type="text" value="" class="form-control" style="margin-left: 10px;" disabled id="txtSupplierEmail">
                            </td> -->
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
                                            <option>
                                                Cash
                                            </option>
                                            <option>
                                                Cheque
                                            </option>
                                            <option>
                                                Cheque - Post Dated
                                            </option>
                                        </select>
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
                    <form>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Order List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="orderedItemsTbl">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Item Type</th>
                                            <th style="text-align: center;">Item Description</th>
                                            <th style="text-align: center;">Quantity</th>        
                                            <th style="text-align: center;">Action</th>                                                  
                                        </tr>
                                    </thead>
                                    <tbody id="tblOrderedItems">
                                            <!-- ORDERED ITEMS GO HERE-->
                                    </tbody>
                                </table>                                
                            </div>                            
                        </div>
                        </form>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div> 
                    <div style="margin-left: 93%;">
                        <input type="button" value="Send" class="btnBlue" data-toggle="modal" data-target="#sendEmailTo<?php echo $fetch['supplierID']?>">
                    </div>
                    <?php
                        $conn->close();
                    ?>
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
    
   <!--MODALS-->       
    <div class="modal fade" id="sendEmailTo" role="dialog" style="width: 600px; top: 20%;left: 35%;">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Send Purchase Order</h5>
                    </div>                                           
                <div class="modal-body" style="font-weight: 550;">                                         
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="orderdItemsTbl">                                                                    
                                <tbody>
                                    <tr style="text-align: center;">
                                        <td> Email </td>
                                        <td><input type="text" disabled style="border: 0; height: 100%;width: 100%; padding: 0; background: none;"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Message: </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <textarea style="resize: none; height: 150px; width: 100%;" disabled>Good day Mr. Wayne! This is Gibrosen Fire Safety Products, we are emailing you today to purchase fire safety supplies. The attached pdf below are all the items that we want to purchase from you.
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Attachments:</td>
                                        <td><a href="#">GibrosenPurchaseOrder.pdf</a></td>
                                    </tr>
                                </tbody>
                            </table>                               
                        </div>                            
                    </div>
                </div>
                <div class="modal-footer">     
                    <a href="#" class="btn btn-default" style="width: 90px;" data-toggle="modal" data-target="#confirmAddModal">Send</a>
                    <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                </div>
            </div>                                        
        </div>
    </div>
        <div class="modal fade" id="addItems" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                <div class="modal-dialog">
                    <!-- Modal content-->                    
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add item</h4>           
                    </div>                                           
                    <div class="modal-body">                                         
                    <div style="margin-bottom: 10px;">
                        <label>Item Type:</label>
                        <select class="form-control" id="selectItemType">
                            <option value="None">--SELECT ITEM TYPE--</option>
                            <option value="Fire Extinguisher">Fire Extinguisher</option>
                            <option value="Smoke Detectors">Smoke Detectors</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label>Item Description:</label>
                        <select class="form-control" id="selectItemName">
                            <option>--SELECT ITEM--</option>
                        </select>
                    </div>
                    <label>Quantity:</label>
                    <input require type="number" class="form-control input-sm" aria-controls="dataTables-example" id="itemQty" style="width: 70px;">
                    </div>
                    <div class="modal-footer">     
                        <input type="button" class="btn btn-default" style="width: 90px;" id="btnAddItem" value="Add" data-dismiss="modal">
                        <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                    </div>
                    </div>  
            </div>
        </div>
</body>
</html>