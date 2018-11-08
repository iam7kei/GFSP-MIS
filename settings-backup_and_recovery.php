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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exportModal"><i class="glyphicon glyphicon-share"></i>    Export</button>
                    <br><br>
                    <!-- Inspector List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Available backups
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Code</th>
                                            <th style="text-align: center;">Date</th>
                                            <th style="text-align: center;">Time</th>
                                            <th style="text-align: center;">Backup By</th>
                                            <th style="text-align: center;">Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>BA001</td>
                                        <td>06-01-18</td>
                                        <td>9:00am</td>
                                        <td>Secretary</td>
                                        <td style="width: 250px;">
                                            <center>
                                            <button class="btnYes"><i class="glyphicon glyphicon-plus"></i>  Import</button>
                                            <button class="btnNo"><i class="glyphicon glyphicon-trash"></i>  Delete</button>
                                                </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BA002</td>
                                        <td>07-01-18</td>
                                        <td>9:00am</td>
                                        <td>Secretary</td>
                                        <td style="width: 250px;">
                                            <center>
                                            <button class="btnYes"><i class="glyphicon glyphicon-plus"></i>  Import</button>
                                            <button class="btnNo"><i class="glyphicon glyphicon-trash"></i>  Delete</button>
                                                </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BA003</td>
                                        <td>08-01-18</td>
                                        <td>9:00am</td>
                                        <td>Secretary</td>
                                        <td style="width: 250px;">
                                            <center>
                                            <button class="btnYes"><i class="glyphicon glyphicon-plus"></i>  Import</button>
                                            <button class="btnNo"><i class="glyphicon glyphicon-trash"></i>  Delete</button>
                                                </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BA004</td>
                                        <td>09-01-18</td>
                                        <td>9:00am</td>
                                        <td>Secretary</td>
                                        <td style="width: 250px;">
                                            <center>
                                            <button class="btnYes"><i class="glyphicon glyphicon-plus"></i>  Import</button>
                                            <button class="btnNo"><i class="glyphicon glyphicon-trash"></i>  Delete</button>
                                                </center>
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
                        <!-- Export Modal -->
                        <div class="modal fade" id="exportModal" role="dialog">
                                    <div class="modal-dialog" style="width: 200px;top: 45%;left: 45%;">
                                      <!-- Modal content-->
                                      <div class="modal-content">                                                                                                                                       
                                        <div class="modal-body">                                         
                                            <h4>Export Database?</h4>
                                            <br>
                                            <button class="btn btn-default" data-dismiss="modal" style="width: 45%;"> Export</button>
                                            <button class="btn btn-default" data-dismiss="modal" style="width: 45%;"> Cancel</button>
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
