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
                     <button class="btn btn-primary"  data-toggle="modal" data-target="#addNewUser"><i class="glyphicon glyphicon-plus"></i> Add New User</button>
                    <br>
                    <br>
                    <!-- Client List -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             User List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Username</th>
                                            <th style="text-align: center;">User Owner</th>
                                            <th style="text-align: center;">Last Access</th>
                                            <th style="text-align: center;">Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require 'php_scripts/databaseConn.php';
                                            $query = $conn->query("select * from `users`") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>                                                            
                                                <td style="text-align: center;"><?php echo $fetch['username']?></td>
                                                <td style="text-align: center;"><?php echo $fetch['userOwner']?></td>
                                                <td style="text-align: center;"><?php echo $fetch['lastAccess']?></td>                                                
                                                <td style="text-align: center;">
                                                    <div class="btn-group">
                                                    <button href="#edit<?php echo $fetch['userID'];?>" data-target="#edit<?php echo $fetch['userID'];?>" data-toggle="modal" class="btn btn-primary"><i class='fa fa-pencil' style='margin-right: 5px;'></i>Edit</button>
                                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
                                                    <ul class="dropdown-menu" style="background-color: #d9534f">
                                                        <form action="php_scripts/deleteSupplier.php" method="post" method="post" onsubmit="return confirm('Are you sure you want to delete <?php echo $fetch['supplierName']?>?');" >
                                                            <input type="hidden" value="<?php echo $fetch['userID']?>" name="supplierID">
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
                    
                        <!-- ADD NEW USER ACCOUNTS Modal -->
                        <div class="modal fade" id="addNewUser" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                        <form action="php_scripts/addUser.php" method="post" method="post" onsubmit="return confirm('Are you sure you want to add this New User?');" >
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">New User Account</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Username
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" aria-controls="dataTables-example" name="username">
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Password
                                                </td>
                                                <td>
                                                    <input type="password" class="form-control input-sm" name="userPassword">
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    User Owner
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="userOwner">
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
                                            $query = $conn->query("SELECT * FROM `users`") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                        ?>        
                        <div class="modal fade" id="edit<?php echo $fetch['userID'];?>" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                        <form action="php_scripts/updateUserAccount.php" method="post">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Edit</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                     Username
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" aria-controls="dataTables-example" value="<?php echo $fetch['username']?>" name="usernameUpdate">
                                                </td>    
                                                </tr>
<!--
                                                <tr>
                                                <td>
                                                    Current Password
                                                </td>
                                                <td>
                                                    <input type="password" class="form-control input-sm" value="<?php echo $fetch['password']?>" name="passwordUpdate" required>
                                                </td>    
                                                </tr>
-->
                                                <tr>
                                                <td>
                                                    New Password
                                                </td>
                                                <td>
                                                    <input type="password" class="form-control input-sm" value="" name="passwordUpdate" required>
                                                </td>    
                                                </tr>
                                        </table>
                                        </div>
                                        <div class="modal-footer">     
                                            <input type="hidden" value="<?php echo $fetch['userID']?>" name="userID">
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