<ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>			
                    <li>
                        <a href="index.php" class="<?php if($page == 'dashboard'){echo "active-menu";}?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>    
                    <li >
                        <a  href="#" class="<?php if($page == 'masterfile'){echo "active-menu";}?>"><i class="fa fa-folder fa-3x"></i>Master Files <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                   <a href="master-file_client.php">Client</a>                                        
                                </li>
                                <li>
                                   <a href="master-file_suppliers.php">Supplier</a>                                    
                                </li>
                                <li>
                                   <a href="master-file_employees.php">Employee</a>              
                                </li>                                
                          </ul>
                    </li>
                    <li>
                        <a href="#" class="<?php if($page == 'transactions'){echo "active-menu";}?>"><i class="fa fa-edit fa-3x"></i> Transactions<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="transactions-sales.php" >Sales</a>
                            </li>
                            <li>
                                <a href="transactions-purchases.php" >Purchases</a>
                            </li>
                            <li>
                                <a href="transactions-inspection.php" >Inspection</a>
                            </li>
                            <li>
                                <a href="transactions-delivery.php" >Delivery</a>
                            </li>
                            <li>
                                <a href="transactions-maintenance.php">Maintenance</a>
                            </li>
                             <li>
                                <a href="transactions-installation.php" >Installation</a>
                            </li>
                            <li>
                                <a href="transactions-warranty_monitoring.php" >Warranty Monitoring</a>
                            </li>                           

                        </ul>
                    </li>		
                   <li>
                        <a href="scheduling.php" class="<?php if($page == 'scheduling'){echo "active-menu";}?>"><i class="fa fa-calendar fa-3x"></i> Scheduling </a>                          
                    </li>                                        			                     
                     <li>
                        <a href="#" class="<?php if($page == 'notifications'){echo "active-menu";}?>"><i class="fa fa-bell fa-3x"></i>Notifications<span class="fa arrow"></span></a>  
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="notifications-sms.php" >SMS</a>
                            </li>
                            <li>
                                <a href="notifications-email.php">E-MAIL</a>
                            </li>
                        </ul>
                    </li>	
					  <li>
                        <a  href="#" class="<?php if($page == 'inventory'){echo "active-menu";}?>"><i class="fa fa-table fa-3x"></i> Inventory <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                   <a href="inventory-products.html">Inventory Products</a>                                        
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
                        <a href="#" class="<?php if($page == 'reports'){echo "active-menu";}?>"><i class="fa fa-file fa-3x"></i> Reports<span class="fa arrow"></span></a>
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
                        <a href="#" class="<?php if($page == 'settings'){echo "active-menu";}?>"><i class="fa fa-cogs fa-3x"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="settings_backup-and-recovery.html">Backup and Recovery</a>
                            </li>
                            <li>
                                <a href="settings-user_accounts.php">User Accounts</a>
                            </li>
                            <li>
                                <a href="report-exceptional.html">Audit Log</a>                             
                            </li>
                        </ul>
                      </li>                    	
                </ul>  