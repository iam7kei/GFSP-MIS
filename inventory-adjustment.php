<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gibrosen Fire Safety Producuts MIS</title>
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
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 20 September 2018 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                    <!-- Inspector List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Inventory Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Item Description</th>
                                            <th style="text-align: center;">Type</th>
                                            <th style="text-align: center;">In-Stock Office</th>
                                            <th style="text-align: center;">In-Stock Warehouse</th>
                                            <th style="text-align: center;">Total Stock</th>
                                            <th style="text-align: center;">Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>HCFC 123</td>
                                        <td>Fire Extinguisher - HCFC</td>
                                        <td>5</td>
                                        <td>10</td>
                                        <td>15</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#stockInModal" class="btnStockIn"><i class="glyphicon glyphicon-plus"></i></button>
                                            <button class="btnStockOut" data-toggle="modal" data-target="#stockOutModal"><i class="glyphicon glyphicon-minus"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Amerex B456</td>
                                        <td>Fire Extinguisher - Dry Chemical</td>
                                        <td>23</td>
                                        <td>5</td>
                                        <td>28</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#stockInModal" class="btnStockIn"><i class="glyphicon glyphicon-plus"></i></button>
                                            <button class="btnStockOut" data-toggle="modal" data-target="#stockOutModal"><i class="glyphicon glyphicon-minus"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Smoke Detector</td>
                                        <td>Smoke Detector</td>
                                        <td>10</td>
                                        <td>15</td>
                                        <td>25</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#stockInModal" class="btnStockIn"><i class="glyphicon glyphicon-plus"></i></button>
                                            <button class="btnStockOut" data-toggle="modal" data-target="#stockOutModal"><i class="glyphicon glyphicon-minus"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fire Hose</td>
                                        <td>Fire Hose</td>
                                        <td>33</td>
                                        <td>7</td>
                                        <td>40</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#stockInModal" class="btnStockIn"><i class="glyphicon glyphicon-plus"></i></button>
                                            <button class="btnStockOut" data-toggle="modal" data-target="#stockOutModal"><i class="glyphicon glyphicon-minus"></i></button>
                                        </td>
                                    </tr>
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
                        <!-- Inspector Modal -->
        <div class="stockInModal" >
        <div class="modal fade" id="stockInModal" role="dialog" style="width: 300px; top: 35%;left: 43.5%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h3 class="modal-title">Stock In</h3>           
                                        </div>                                           
                                        <div class="modal-body">                                                                                                                            
                                            <span class="stockInModalContent">
                                                <div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Office <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Warehouse</a></li>								
											  </ul>
											</div>
                                                <input type="text" class="stockInModalContentInput" placeholder="Enter Amount">
                                            </span>
                                        </div>
                                        <div class="modal-footer">                                                                                          
                                                    <input data-toggle="modal" data-target="#confirmSaveModal" type="button" value="Save" class="btnYes" style="width: 70px;">
                                                    <input type="button" value="Cancel" class="btnNo" data-dismiss="modal" style="width: 70px;">                                                  
                                        </div>
                                      </div>                                        
								</div>
							</div>
        </div>
        
        <div class="stockInModal" >
        <div class="modal fade" id="stockOutModal" role="dialog" style="width: 300px; top: 35%;left: 43.5%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h3 class="modal-title">Stock Out</h3>           
                                        </div>                                           
                                        <div class="modal-body">                                                                                                                            
                                            <span class="stockInModalContent">
                                                <div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Office <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Warehouse</a></li>								
											  </ul>
											</div>
                                                <input type="text" class="stockInModalContentInput" placeholder="Enter Amount">
                                            </span>
                                        </div>
                                        <div class="modal-footer">                                                                                          
                                                    <input data-toggle="modal" data-target="#confirmSaveModal" type="button" value="Save" class="btnYes" style="width: 70px;">
                                                    <input type="button" value="Cancel" class="btnNo" data-dismiss="modal" style="width: 70px;">                                                  
                                        </div>
                                      </div>                                        
								</div>
							</div>
        </div>
        
        <!--CONFIRM-->
        <div class="confirmSave" >
        <div class="modal fade" id="confirmSaveModal" role="dialog" style="width: 16%; top: 35%;left: 45%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h5 class="modal-title">Do you really want to save?</h5>           
                                        </div>                                           
                                        <div class="modal-body">   
                                            <center>
                                                <button type="button" class="btnStockIn" data-dismiss="modal" style="width: 70px;">Yes</button>
                                                <input type="button" value="Cancel" class="btnStockOut"  data-dismiss="modal" style="width: 70px;">                                             
                                            </center>
                                        </div>                                       
                                      </div>                                        
								</div>
							</div>
        </div>
                        
         <div class="modal fade" id="InspectorModal002" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Inspector Basic Information</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Inspector No.
                                                </td>
                                                <td>
                                                    INSP002
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Inspector Name
                                                </td>
                                                <td>
                                                    Kris Puatwo
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Contact No.
                                                </td>
                                                <td>
                                                    09491231237
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Inspector Address
                                                </td>
                                                <td>
                                                    Bacolod City
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    krispuatwo@dankmemes.com
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Station
                                                </td>
                                                <td>
                                                    San Juan
                                                </td>    
                                                </tr>                                                
                                        </table>
                                        </div>
                                        <div class="modal-footer">                                           
                                        </div>
                                      </div>                                        
								</div>
							</div>
        <div class="modal fade" id="InspectorModal003" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Inspector Basic Information</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Inspector No.
                                                </td>
                                                <td>
                                                    INSP003
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Inspector Name
                                                </td>
                                                <td>
                                                    John Puathree
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Contact No.
                                                </td>
                                                <td>
                                                    09491234234
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Inspector Address
                                                </td>
                                                <td>
                                                    Bacolod City
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    johnpuathree@dankmemes.com
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Station
                                                </td>
                                                <td>
                                                    San Juan
                                                </td>    
                                                </tr>                                                
                                        </table>
                                        </div>
                                        <div class="modal-footer">                                           
                                        </div>
                                      </div>                                        
								</div>
							</div>
        <div class="modal fade" id="InspectorModal003" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Inspector Basic Information</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Inspector No.
                                                </td>
                                                <td>
                                                    INSP003
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Inspector Name
                                                </td>
                                                <td>
                                                    John Puathree
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Contact No.
                                                </td>
                                                <td>
                                                    09491234234
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Inspector Address
                                                </td>
                                                <td>
                                                    Bacolod City
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    johnpuathree@dankmemes.com
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Station
                                                </td>
                                                <td>
                                                    San Juan
                                                </td>    
                                                </tr>                                                
                                        </table>
                                        </div>
                                        <div class="modal-footer">                                           
                                        </div>
                                      </div>                                        
								</div>
							</div>
                    <!-- Applicant Assigned Modal -->
                        <div class="modal fade" id="ApplicantAssignedModal" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Applicants Assigned</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                                              
                                        </div>
                                        <div class="modal-footer">                                           
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
