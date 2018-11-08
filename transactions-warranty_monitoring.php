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
font-size: 16px;"> Last access : 20 March 2018 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                    <!-- Client List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Product List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Product No.</th>
                                            <th style="text-align: center;">Item Description</th>
                                            <th style="text-align: center;">Type</th>                                                                                   
                                            <td style="text-align: center;">Date Started</td>                                                                                 
                                            <td style="text-align: center;">Date End</td>                                                                                 
                                            <td style="text-align: center;">Status</td>
                                            <td style="text-align: center;">Action</td>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>PROD001</td>
                                        <td>Fire Extinguisher HFCFC 123</td>
                                        <td>Fire Extinguisher - HCFC</td>     
                                        <td>09-29-15</td>
                                        <td>09-18-18</td>
                                        <td style="color: red;"><a href="" style="color: red;">Expired <i class="glyphicon glyphicon-warning-sign"></a></i></td>
                                        <td style="text-align: center;"><a href="#"><i class="glyphicon glyphicon-envelope"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>PROD002</td>
                                        <td>Fire Extinguisher HFCFC 123</td>
                                        <td>Fire Extinguisher - HCFC</td>
                                        <td>09-29-18</td>
                                        <td>09-18-20</td>
                                        <td style="color: red;">Nearly Expiring <i class="glyphicon glyphicon-warning-sign" style="color: #ff2323;"></i></td>
                                        <td style="text-align: center;"><a href="#"><i class="glyphicon glyphicon-envelope"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>PROD003</td>
                                        <td>Fire Extinguisher HFCFC 123</td>
                                        <td>Fire Extinguisher - HCFC</td>    
                                        <td>09-29-18</td>
                                        <td>09-18-20</td>
                                        <td style="color: lawngreen;">Available</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>PROD004</td>
                                        <td>Fire Extinguisher HFCFC 123</td>
                                        <td>Fire Extinguisher - HCFC</td>  
                                        <td>09-29-18</td>
                                        <td>09-18-20</td>
                                        <td style="color: lawngreen;">Available</td>
                                        <td></td>
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
                        <!-- ADD NEW CLIENT Modal -->
                        <div class="modal fade" id="addNewClient" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">New Client</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Client No.
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm"  value="CLIENT005" disabled>
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                     Name
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm">
                                                </td>    
                                                </tr>                                           
                                                <tr>
                                                <td>
                                                    Contact No.
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm">
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Client Address
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm">
                                                </td>    
                                                </tr>                                             
                                                <tr>
                                                <td>
                                                    Contact Person
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm">
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
                        <div class="modal fade" id="editClient" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Edit</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Client No.
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm"  value="CLIENT001" disabled>
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                     Name
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" aria-controls="dataTables-example" value="Bruce Wayne">
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" value="client001@email.com">
                                                </td>    
                                                </tr>                                           
                                                <tr>
                                                <td>
                                                    Contact No.
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" value="123-123-1234">
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Client Address
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" value="Bacolod City">
                                                </td>    
                                                </tr>                                             
                                                <tr>
                                                <td>
                                                    Contact Person
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" value="Mark Jason Jagonoy	
">
                                                </td>    
                                                </tr>                                                
                                        </table>
                                        </div>
                                        <div class="modal-footer">     
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-toggle="modal" data-target="#confirmSaveModal">Save</a>
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                        </div>
                                      </div>                                        
								</div>
							</div>   
         <div class="confirmAdd" >
        <div class="modal fade" id="confirmAddModal" role="dialog" style="width: 16%; top: 35%;left: 45%">
                                    <div class="modal-dialog" >
                                      <!-- Modal content-->
                                      <div class="modal-content" >                                                                                 
                                        <div class="modal-body">   
                                            <h4 class="modal-title">Add New Client?</h4>
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
