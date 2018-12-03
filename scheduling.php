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
    
    <script type="text/javascript">
        
        function myFunction() {
            document.getElementById("schedule-modal-action-button").value = "Save";
            if(document.getElementById("schedule-modal-action-button").value = "Save"){
                document.getElementById("test").disabled = false;
            }	
        }
    </script>
    
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
font-size: 16px;"> Last access : 20 September 2018 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <?php
                        $page = 'scheduling';
                        include "assets/requiredPages/sideNav.php"
                    ?>
            </div>
            
        </nav> 
        <!-- /. NAV SIDE  -->        
        <style>
            * {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {    
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}
#calendar{
    width: 70%;
    height: 900px;
    margin-left: 350px;
    margin-top: 50px;
            }

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
        </style>
            <div id='calendar'>
            <div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      September<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
    <li><button data-toggle="modal" data-target="#schedule" class="btn-action">10</button></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li><button data-toggle="modal" data-target="#schedule" class="btn-action">20</button></li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
        </div>
        <div class="modal fade" id="schedule" role="dialog" style="top: 27%;left: 30%;">
                                    <div class="modal-dialog" style="width: 800px;">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Schedules</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Client
                                                </td>
                                                <td>
                                                    Technician
                                                </td>
                                                <td>
                                                    Type
                                                </td>
                                                <td>
                                                    Time
                                                </td> 
                                                    <td>Status</td>
                                                    <td>Action</td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    CLIENT001   
                                                </td>
                                                <td>
                                                    Technician 1
                                                </td>
                                                <td>
                                                    Inspection
                                                </td>
                                                <td>
                                                    8:00am
                                                </td> 
                                                    <td>On going</td>
                                                    <td><div class="btn-group">
										  <button class="btn btn-primary" style="width: 70px;" data-toggle="modal" data-target="#editSchedule"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Edit</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu" style="background-color: #d9534f">
											<li><button class="btn btn-danger" style="border: 0;"><i class="fa fa-trash"></i> Delete</button></li>											
										  </ul>
										</div></td>
                                                </tr> 
                                                 
                                                <tr>
                                                <td>
                                                    CLIENT002  
                                                </td>
                                                <td>
                                                    Technician 1
                                                </td>
                                                <td>
                                                    Inspection
                                                </td>
                                                <td>
                                                    1:00pm
                                                </td> 
                                                    <td>On going</td>
                                                    <td><div class="btn-group">
										  <button class="btn btn-primary" style="width: 70px;" data-toggle="modal" data-target="#editClient"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Edit</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu" style="background-color: #d9534f">
											<li><button class="btn btn-danger" style="border: 0;"><i class="fa fa-trash"></i> Delete</button></li>											
										  </ul>
										</div></td>
                                                </tr> 
                                                 
                                                <tr>
                                                <td>
                                                    CLIENT003         
                                                </td>
                                                <td>
                                                    Technician 1
                                                </td>
                                                <td>
                                                    Installation
                                                </td>
                                                <td>
                                                    5:00pm
                                                </td> 
                                                    <td>On going</td>
                                                    <td><div class="btn-group">
										  <button class="btn btn-primary" style="width: 70px;" data-toggle="modal" data-target="#editClient"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Edit</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu" style="background-color: #d9534f">
											<li><button class="btn btn-danger" style="border: 0;"><i class="fa fa-trash"></i> Delete</button></li>											
										  </ul>
										</div></td>
                                                </tr> 
                                            
                                        </table>
                                        </div>
                                        <div class="modal-footer">      
                                            <input type="button" class="btn btn-default" value="Add Schedule" data-toggle="modal" data-target="#addSchedule">
                                        </div>
                                      </div>                                        
								</div>
							</div>
        <div class="modal fade" id="editSchedule" role="dialog" style="width: 600px; top: 20%;left: 35%;z-index: 1000;">
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
                                                    Client
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm"  value="CLIENT001" disabled>
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                     Technician
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" aria-controls="dataTables-example" value="Technician 1">
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Type
                                                </td>
                                                <td>
                                                    <div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Installation <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Inspection</a></li>
												<li><a href="#">Pickup</a></li>
												<li><a href="#">Delivery</a></li>												
											  </ul>
											</div>
                                                </td>    
                                                </tr>                                           
                                                <tr>
                                                <td>
                                                    Time
                                                </td>
                                                <td>
                                                    <input type="time" class="form-control input-sm" value="123-123-1234">
                                                </td>    
                                                </tr>                                            
                                                <tr>
                                                <td>
                                                    Status
                                                </td>
                                                <td>
                                                    <div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">On Going <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Done</a></li>												
											  </ul>
											</div>
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
        <div class="modal fade" id="addSchedule" role="dialog" style="width: 600px; top: 20%;left: 35%;z-index: 1000;">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Add New Schedule</h4>           
                                        </div>                                           
                                        <div class="modal-body">                                         
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
                                                <tr>
                                                <td>
                                                    Client
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm" >
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                     Technician
                                                </td>
                                                <td>
                                                    <input type="search" class="form-control input-sm">
                                                </td>    
                                                </tr>
                                                <tr>
                                                <td>
                                                    Type
                                                </td>
                                                <td>
                                                    <div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Installation <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Inspection</a></li>
												<li><a href="#">Pickup</a></li>
												<li><a href="#">Delivery</a></li>												
											  </ul>
											</div>
                                                </td>    
                                                </tr>                                           
                                                <tr>
                                                <td>
                                                    Date
                                                </td>
                                                <td>
                                                    <input type="date" class="form-control input-sm" disabled>
                                                </td>    
                                                </tr>                                          
                                                <tr>
                                                <td>
                                                    Time
                                                </td>
                                                <td>
                                                    <input type="time" class="form-control input-sm">
                                                </td>    
                                                </tr>                                                                                                                                       
                                        </table>
                                        </div>
                                        <div class="modal-footer">     
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-toggle="modal" data-target="#confirmSaveModal">Add</a>
                                            <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                                        </div>
                                      </div>                                        
								</div>
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
