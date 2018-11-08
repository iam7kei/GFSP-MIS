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
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Michael Ryan Callejas , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text" style="font-size: 21px;">Messages</p>
                    <p class="text-muted">150</p>
                </div>
             </div>                  
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text" style="font-size: 21px;">Job Orders</p>
                    <p class="text-muted">100</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text" style="font-size: 21px;">Notifications</p>
                    <p class="text-muted">232</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-exclamation-triangle"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text" style="font-size: 21px;">Items Expiring</p>
                    <p class="text-muted">80</p>
                </div>
             </div>
		     </div>
			</div>

      <div class="col-md-8">
      <div class="todsched">
<div class="panel panel-default">
                        <div class="panel-heading">
                           <h2>Items Expiring!</h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item No.</th>
                                            <th>Type</th>
                                            <th>Client</th>
                                            <th>Date</th>                                            
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>FE1234</td>
                                            <td>Fire Extinguisher - Dry Chemical</td>
                                            <td>CLIENT001</td>
                                            <td>09-30-18</td>
                                        </tr>
                                        <tr>
                                            <td>FE1234</td>
                                            <td>Fire Extinguisher - Dry Chemical</td>
                                            <td>CLIENT001</td>
                                            <td>09-30-18</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>FE1234</td>
                                            <td>Fire Extinguisher - Dry Chemical</td>
                                            <td>CLIENT001</td>
                                            <td>09-30-18</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>FE1234</td>
                                            <td>Fire Extinguisher - Dry Chemical</td>
                                            <td>CLIENT001</td>
                                            <td>09-30-18</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>FE1234</td>
                                            <td>Fire Extinguisher - Dry Chemical</td>
                                            <td>CLIENT001</td>
                                            <td>09-30-18</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>FE1234</td>
                                            <td>Fire Extinguisher - Dry Chemical</td>
                                            <td>CLIENT001</td>
                                            <td>09-30-18</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <style>
                      .table-responsive{
                        width: 800px;
                      }
                      .todsched{
                        width: 850px;
                      }
                    </style>
                    </div>
                </div>
            </div>
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
    
   
</body>
</html>
