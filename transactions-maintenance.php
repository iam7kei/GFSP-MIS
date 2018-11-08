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
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <p style="font-weight: 700;">maintenance</p>
                            <hr>
                            <table>
                                <tr>
                                    <td>
                                        <p style="padding-top: 10px; margin-right: 10px;">Client:</p> 
                                    </td>
                                    <td>
                                        <select style="height: 35px;" class="form-control">
                                            <option>CLIENT001</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="BatCafe" disabled style="padding: 2px; width: 450px; height: 35px;  margin-left: 10px;" class="form-control">
                                    </td>
                                </tr>
                            </table>                        
                    </div>
                </div>
                    <br>
                     <div class="row">
                <div class="col-md-12">                    
                     <button class="btn btn-primary"  data-toggle="modal" data-target="#addItems"><i class="glyphicon glyphicon-pencil"></i>   Edit Table</button>                                       
                    <br>
                    <br>
                    <!-- Client List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             items
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Quantity</th>
                                            <th style="text-align: center;">Unit</th> 
                                            <th style="text-align: center;">Item Description</th>     
                                            <th style="text-align: center;">Item Type</th>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">10</td>
                                            <td style="text-align: center;">Units</td>
                                            <td style="text-align: center;">Fire Extinguisher - HCFC</td>
                                            <td style="text-align: center;">Fire Extinguisher</td>
                                            
                                        </tr>
                                    </thead>
                                   <!-- <tr>
                                        <td>FE3132</td>
                                        <td>Fire Extinguisher HFCFC 123</td>
                                        <td style="text-align: center;">150</td>                                                                           
                                        <td>
                                            <center>
                                                <div class="btn-group">
										  <button class="btn btn-primary" style="width: 70px;" data-toggle="modal" data-target="#editClient"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Edit</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu" style="background-color: #d9534f">
											<li><button class="btn btn-danger" style="border: 0;"><i class="fa fa-trash"></i> Delete</button></li>											
										  </ul>
										</div>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FE4232</td>
                                        <td>Fire Extinguisher - Dry Chemical</td>
                                        <td style="text-align: center;">180</td>                                                                                     
                                        <td>
                                            <center>
                                               <div class="btn-group">
										  <button class="btn btn-primary" style="width: 70px;"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Edit</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu" style="background-color: #d9534f">
											<li><button class="btn btn-danger" style="border: 0;"><i class="fa fa-trash"></i> Delete</button></li>											
										  </ul>
										</div>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FH4232</td>
                                        <td>Fire Hose</td>
                                        <td style="text-align: center;">200</td>                                                                           
                                        <td>
                                            <center>
                                                <div class="btn-group">
										  <button class="btn btn-primary" style="width: 70px;"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Edit</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu" style="background-color: #d9534f">
											<li><button class="btn btn-danger" style="border: 0;"><i class="fa fa-trash"></i> Delete</button></li>											
										  </ul>
										</div>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SD3213</td>
                                        <td>Smoke Detector</td>
                                        <td style="text-align: center;">150</td>                                                                             
                                        <td>
                                            <center>
                                                <div class="btn-group">
										  <button class="btn btn-primary" style="width: 70px;"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Edit</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu" style="background-color: #d9534f">
											<li><button class="btn btn-danger" style="border: 0;"><i class="fa fa-trash"></i> Delete</button></li>											
										  </ul>
										</div>
                                            </center>
                                        </td>
                                    </tr>-->                                    
                                </table>
                               
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                         <div class="col-sm-12">
                             remarks
                            <textarea style="width: 100%; height: 150px;"></textarea>
                         </div>
            </div> 
                    <div style="margin-left: 93.5%;">
                        <input type="button" value="Save" class="btnBlue" data-toggle="modal" data-target="#saveModal">                        
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
    
   <!--MODALS-->
    <div class="modal fade" id="saveModal" role="dialog" style="width: 320px; top: 40%;left: 45%;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Confirm Save</h4>           
                                        </div>                                                                               
                                        <div class="modal-footer">     
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-toggle="modal" data-target="#confirmAddModal">Save</a>
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
                                          <h4 class="modal-title">Add Items</h4>           
                                        </div>                                           
                                        <div class="modal-body" style="font-weight: 550; text-transform: uppercase;">                                         
                                            <p>Type: 
                                                <select style="font-weight: normal;">
                                                    <option>
                                                        --SELECT PRODUCT TYPE--
                                                    </option>
                                                </select>
                                            </p>
                                            <p>Quantity: <input type="number" style="width: 70px; padding: 5px; font-weight: normal;"></p>
                                        </div>
                                        <div class="modal-footer">     
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-toggle="modal" data-target="#confirmAddModal">Add</a>
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                        </div>
                                      </div>                                        
								</div>
							</div>
</body>
</html>
