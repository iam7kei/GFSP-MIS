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
    <script src="assets/js/jquery.min.js"></script>
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
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="index.html" class="active-menu"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>    
                    <li >
                        <a  href="#"><i class="fa fa-folder fa-3x"></i>Master Files <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                   <a href="master-file_client.html">Client</a>                                        
                                </li>
                                <li>
                                   <a href="applicant-record.html">Supplier</a>                                    
                                </li>
                                <li>
                                   <a href="applicant-record.html">Employee</a>                                    
                                </li>
                                <li>
                                   <a href="applicant-record.html">Product</a>                                    
                                </li>
                          </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Job Order<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="job_order-installation.html" >Installation</a>
                            </li>
                            <li>
                                <a href="job_order-maintenance">Maintenance</a>
                            </li>
                        </ul>
                    </li>		
                   <li>
                        <a  href="scheduling.html"><i class="fa fa-calendar fa-3x"></i> Scheduling </a>                          
                    </li>                                        			
                     <li>
                        <a href="#"><i class="fa fa-laptop fa-3x"></i>Warranty Monitoring</a>                        
                    </li>                                      			
                     <li>
                        <a href="#"><i class="fa fa-bell fa-3x"></i>Notifications<span class="fa arrow"></span></a>  
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="notifications-sms.html" >SMS</a>
                            </li>
                            <li>
                                <a href="job_order-maintenance">E-MAIL</a>
                            </li>
                        </ul>
                    </li>	
					  <li>
                        <a  href="#"><i class="fa fa-table fa-3x"></i> Inventory <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                   <a href="inventory-adjustment.html">Inventory Adjustment</a>                                        
                                </li>
                                <li>
                                   <a href="#">Inventory Item Movement<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                    <li>
                                        <a href="inventory-item-movement.html">Move Items</a>
                                    </li>
                                    <li>
                                        <a href="inventory-item-movement-tracking.html" >Track Item Movement</a>
                                    </li>       
                                </ul>                                       
                                </li>
                          </ul>
                    </li>                  
                    <li>
                        <a href="#"><i class="fa fa-file fa-3x"></i> Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="report-detailed.html">Sales</a>
                            </li>
                            <li>
                                <a href="report-summary.html">Purchases</a>
                            </li>
                            <li>
                                <a href="report-exceptional.html">Client</a>                             
                            </li>
                            <li>
                                <a href="report-exceptional.html">Inventory</a>                             
                            </li>
                        </ul>
                      </li>                  
                    <li>
                        <a href="#"><i class="fa fa-cogs fa-3x"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="settings_backup-and-recovery.html">Backup and Recovery</a>
                            </li>
                            <li>
                                <a href="report-summary.html">User Accounts</a>
                            </li>
                            <li>
                                <a href="report-exceptional.html">Audit Log</a>                             
                            </li>
                        </ul>
                      </li>                    	
                </ul>
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>    
                    <li >
                        <a  href="#"><i class="fa fa-folder fa-3x"></i>Master Files <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                   <a href="master-file_client.html">Client</a>                                        
                                </li>
                                <li>
                                   <a href="applicant-record.html">Supplier</a>                                    
                                </li>
                                <li>
                                   <a href="applicant-record.html">Employee</a>                                    
                                </li>
                                <li>
                                   <a href="applicant-record.html">Product</a>                                    
                                </li>
                          </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Job Order<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="register-applicant.html" >Installation</a>
                            </li>
                            <li>
                                <a href="register-inspector.html">Maintenance</a>
                            </li>
                        </ul>
                    </li>		
                   <li>
                        <a  href="scheduling.html"><i class="fa fa-calendar fa-3x"></i> Scheduling </a>                          
                    </li>                                        			
                     <li>
                        <a href="#"><i class="fa fa-laptop fa-3x"></i>Warranty Monitoring</a>                        
                    </li>	
					  <li>
                        <a  href="#"  class="active-menu"><i class="fa fa-table fa-3x"></i> Inventory <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                   <a href="inventory-adjustment.html">Inventory Adjustment</a>                                        
                                </li>
                                <li>
                                   <a href="#">Inventory Item Movement<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                    <li>
                                        <a href="inventory-item-movement.html">Move Items</a>
                                    </li>
                                    <li>
                                        <a href="inventory-item-movement-tracking.html" >Track Item Movement</a>
                                    </li>       
                                </ul>                                       
                                </li>
                          </ul>
                    </li>                  
                    <li>
                        <a href="#"><i class="fa fa-file fa-3x"></i> Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="report-detailed.html">Sales</a>
                            </li>
                            <li>
                                <a href="report-summary.html">Purchases</a>
                            </li>
                            <li>
                                <a href="report-exceptional.html">Client</a>                             
                            </li>
                            <li>
                                <a href="report-exceptional.html">Inventory</a>                             
                            </li>
                        </ul>
                      </li>                  
                    <li>
                        <a href="#"><i class="fa fa-cogs fa-3x"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="report-detailed.html">Backup and Recovery</a>
                            </li>
                            <li>
                                <a href="report-summary.html">User Accounts</a>
                            </li>
                            <li>
                                <a href="report-exceptional.html">Audit Log</a>                             
                            </li>
                        </ul>
                      </li>                    	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">                          
                </div>
                 <!-- /. ROW  -->
                <h2>Inventory Item Movement</h2>
                 <hr />
               <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-primary"  data-toggle="modal" data-target="#addItem"><i class="glyphicon glyphicon-plus"></i> Add Items</button>
                    </div>                    
                </div>
                
                <br>
            <div class="row">
                <div class="col-md-12">
                    <!-- Inspector List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Items to move
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Item Code</th>
                                            <th style="text-align: center;">Type</th>
                                            <th style="text-align: center;">From</th>
                                            <th style="text-align: center;">To</th>                                             
                                            <th style="text-align: center;">Action</th>                                                                                                                                   
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>FE14521</td>
                                        <td>Fire Extinguisher</td>
                                        <td style="text-align: center;">Warehouse</td>                                        
                                        <td style="text-align: center;">Office</td>
                                        <td>            
                                            <center>
                                                <button value="Stock out" class="btnStockOut" data-toggle="modal" data-target="#removeItem"><i class="glyphicon glyphicon-remove"></i></button>
                                                </center>
                                                </td>
                                    </tr>
                                    <tr>
                                        <td>FE12262</td>
                                        <td>Fire Extinguisher</td>
                                        <td style="text-align: center;">Warehouse</td>                                        
                                        <td style="text-align: center;">Office</td>
                                        <td>
                                            <center>
                                                <button value="Stock out" class="btnStockOut" data-toggle="modal" data-target="#removeItem"><i class="glyphicon glyphicon-remove"></i></button>
                                                </center>
                                                </td>
                                    </tr>
                                    <tr>
                                        <td>SD14211</td>
                                        <td>Smoke Detector</td>
                                        <td style="text-align: center;">Warehouse</td>                                        
                                        <td style="text-align: center;">Office</td>
                                        <td>
                                            <center>
                                                <button value="Stock out" class="btnStockOut" data-toggle="modal" data-target="#removeItem"><i class="glyphicon glyphicon-remove"></i></button>
                                                </center>
                                                </td>
                                    </tr>
                                    <tr>
                                        <td>FH23212</td>
                                        <td>Fire Hose</td>
                                        <td style="text-align: center;">Warehouse</td>                                        
                                        <td style="text-align: center;">Office</td>
                                        <td>
                                            <center>
                                                <button value="Stock out" class="btnStockOut" data-toggle="modal" data-target="#removeItem"><i class="glyphicon glyphicon-remove"></i></button>
                                            </center>
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
        
        <div class="removeItem" >
        <div class="modal fade" id="removeItem" role="dialog" style="width: 250px; top: 35%;left: 43.5%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >                                                                                  
                                        <div class="modal-body">                                                                                                                            
                                            <span class="stockInModalContent" style="font-size: 18px;">
                                                Remove item?                                                                                                
                                            </span>
                                            <br><br>
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Yes</a>
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                        </div>                                        
                                      </div>                                        
								</div>
							</div>
        </div>
        
        <div class="addItem" >
        <div class="modal fade" id="addItem" role="dialog" style="top: 10%; left: 30%;">
                                    <div class="modal-dialog" style="width: 600px;">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Item List</h4>           
                                        </div>                                           
                                        <div class="modal-body">
                                            From:
                                            <div class="btn-group" style="width: 100px;">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Warehouse <span class="caret"></span></button>											  
                                              <ul class="dropdown-menu">
												<li ><a href="#"  style="padding: 8px 35px 8px 35px;">Office</a></li>				
											  </ul>
											</div>
                                            <span style="margin-left: 20px;">
                                            To:
                                            <div class="btn-group" >
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Office <span class="caret"></span></button>											  
                                              <ul class="dropdown-menu">
												<li ><a href="#"  style="padding: 8px 35px 8px 35px;">Warehouse</a></li>												
											  </ul>
											</div>
                                            </span>
                                            <br><br>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <th>Item Code</th>
                                                <th>Type</th>
                                                <th></th>
                                                <tr>
                                                <td>
                                                    FE1234
                                                </td>
                                                <td>
                                                    Fire Extinguisher
                                                </td>
                                                <td style="width: 30px;">
                                                    <input type="checkbox">    
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                     SD1234
                                                </td>
                                                <td>
                                                    Smoke Detector
                                                </td>
                                                <td>
                                                    <input type="checkbox">    
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                     FH1234
                                                </td>
                                                <td>
                                                    Fire Hose
                                                </td>   
                                                <td>
                                                    <input type="checkbox">    
                                                </td> 
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                     FE3215
                                                </td>
                                                <td>
                                                    Fire Extinguisher
                                                </td>  
                                                <td>
                                                    <input type="checkbox">    
                                                </td>  
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    FE5232
                                                </td>
                                                <td>
                                                    Fire Extinguisher
                                                </td>
                                                <td>
                                                    <input type="checkbox">    
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    SD1263
                                                </td>
                                                <td>
                                                    Smoke Detector
                                                </td>   
                                                <td>
                                                    <input type="checkbox">    
                                                </td> 
                                                </tr>                                                
                                        </table>
                                        </div>
                                        <div class="modal-footer">       
                                               <a href="#" class="btn btn-default" style="width: 90px;" data-toggle="modal" data-target="#confirmAddModal">Add</a>
                                                <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                        </div>
                                      </div>                                        
								</div>
							</div>
        </div>
        <!--CONFIRM ADD-->
        
        <div class="confirmAdd" >
        <div class="modal fade" id="confirmAddModal" role="dialog" style="width: 16%; top: 35%;left: 45%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >                                                                                 
                                        <div class="modal-body">   
                                            <h4 class="modal-title">Add item(s) to table?</h4>
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
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="width: 1130px;">     
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
