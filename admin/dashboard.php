<?php
include("../db/db.php");
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin | Dashboard</title>
  <!-- loader-->
   <link href="../assets/css/pace.min.css" rel="stylesheet"/>
  <script src="../assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="../assets/favicon.png" type="image/x-icon">
   <!--Vector CSS -->
  <link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CS-->
  <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="../assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="../assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="../assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="../assets/css/app-style.css" rel="stylesheet"/>
</head>

<body class="bg-theme bg-theme11">
 
<!-- Start wrapper-->
 <div id="wrapper" >
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="false" >
     <div class="brand-logo">
      <a href="dashboard.php">
       <img src="../assets/logo.png" style="width: 100px; height: 70px;" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">   </h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol" >
      <li class="sidebar-header">    MAIN NAVIGATION</li>
      <li>
        <a href="dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="sidebar-header" style="font-size: 17px; color:white; font-style:bold; alignment:center;"><span> TABLES</span></li>
      <li  style="margin-left:5%">
        <a href="pap-daily-sales.php">
          <i class="zmdi zmdi-grid"></i> <span>Pap Daily Sales</span>
        </a>
      </li>

      <li  style="margin-left:5%">
        <a href="pap-daily-installation.php">
          <i class="zmdi zmdi-grid"></i> <span>Pap Daily Installation</span>
        </a>
      </li>

      <li  style="margin-left:5%">
        <a href="pap-pending-installation.php">
          <i class="zmdi zmdi-grid"></i> <span>Pending Pap Installation</span>
        </a>
      </li>

      <li style="margin-left:5%">
        <a href="pap-master-record.php">
          <i class="zmdi zmdi-grid"></i> <span>Pap Master Record</span>
        </a>
      </li>

      <li class="sidebar-header" style="font-size: 17px; color:white; font-style:bold;"><span> ACCOUNTS</span></li>
      <li  style="margin-left:5%">
        <a href="new-user.php">
          <i class="fa fa-user"></i> <span>New User</span>
        </a>
      </li>

      <li  style="margin-left:5%">
        <a href="add-teamleader.php">
          <i class="fa fa-user-plus"></i> <span>Add TeamLeader</span>
        </a>
      </li>

    <!--  <li>
        <a href="#">
          <i class="fa fa-minus-circle"></i> <span>Change TeamLeader</span>
        </a>
      </li>

      <li class="sidebar-header" style="font-size: 17px; color:white; font-style:bold; alignment:center;"><span> SALES</span></li>
      <li>
        <a href="#">
          <i class="fa fa-user"></i> <span>A</span>
        </a>
      </li>

      <li>
        <a href="forms.php">
          <i class="fa fa-user-plus"></i> <span>B</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="fa fa-minus-circle"></i> <span>C</span>
        </a>
      </li>

      <li class="sidebar-header" style="font-size: 17px; color:white; font-style:bold; alignment:center;"><span> TECHIE</span></li>
      <li>
        <a href="#">
          <i class="fa fa-user"></i> <span>Material Usage</span>
        </a>
      </li>

      <li>
        <a href="forms.php">
          <i class="fa fa-user-plus"></i> <span>Payment</span>
        </a>
      </li>

    <!--  <li>
        <a href="#">
          <i class="fa fa-minus-circle"></i> <span>Change TeamLeader</span>
        </a>
      </li>-->
      <li class="sidebar-header" style="font-size: 17px; color:white; font-style:bold; alignment:center;"><span> TOOLS</span></li>
      <li  style="margin-left:5%">
        <a href="calendar.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>
      <li  style="margin-left:5%">
        <a href="logout.php">
          <i class="zmdi zmdi-lock"></i> <span>Logout</span>
        </a>
      </li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
     <!-- <i class="fa fa-envelope-open-o"></i></a>-->
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
     <!-- <i class="fa fa-bell-o"></i></a>-->
    </li>
    <li class="nav-item language">
  <!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>-->
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"></h6>
            <p class="user-subtitle"><?php echo $_SESSION['Admin']; ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php
                                             $query="SELECT count(*) as clients from papdailysales";
                                             $data=mysqli_query($connection,$query);
                                             while($row=mysqli_fetch_assoc($data)){
                                             echo $row['clients']."<br><br>";
                                              }
                                              ?> <span class="float-right"><i class="fa fa-check"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Signed PAP <span class="float-right"> <i class="zmdi zmdi-"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php
                                             $query="SELECT COUNT(*)as pending,papinstalled.ClientID,papdailysales.ClientID from papdailysales LEFT JOIN papinstalled on papinstalled.ClientID=papdailysales.ClientID WHERE papinstalled.ClientID is null";
                                             $data=mysqli_query($connection,$query);
                                             while($row=mysqli_fetch_assoc($data)){
                                             echo $row['pending']."<br><br>";
                                              }
                                              ?><span class="float-right"><i class="fa fa-question"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Pending Installation <span class="float-right"><i class="zmdi zmdi-lon-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php
                                             $query="SELECT count(MacAddress) as pap from papinstalled";
                                             $data=mysqli_query($connection,$query);
                                             while($row=mysqli_fetch_assoc($data)){
                                             echo $row['pap']."<br><br>";
                                              }
                                              ?><span class="float-right"><i class="fa fa-wifi"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Installed PAP <span class="float-right"> <i class="zmdi zmdi-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php
                                             $query="SELECT count(MacAddress) as turnedon from turnedonpap";
                                             $data=mysqli_query($connection,$query);
                                             while($row=mysqli_fetch_assoc($data)){
                                             echo $row['turnedon']."<br><br>";
                                              }
                                              ?><span class="float-right"><i class="fa fa-check"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Turned On <span class="float-right"><i class="zmdi zmdi-up"></i></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Progress
		   <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options"></i>
			 </a>
			<!--	<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript:void();">Action</a>
				<a class="dropdown-item" href="javascript:void();">Another action</a>
				<a class="dropdown-item" href="javascript:void();">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void();">Separated link</a>
			   </div>-->
			  </div>
		   </div>
		 </div>
     <?php
                                  
                                  if (!$connection) {
                                      # code...
                                     echo "Problem in database connection! Contact administrator!" . mysqli_error();
                                          }else{
                                           $sql ="SELECT  DateSigned,COUNT(DateSigned) as sales FROM papdailysales GROUP BY DateSigned HAVING COUNT(DateSigned)>1 OR COUNT(DateSigned)=1 AND `DateSigned` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
                                           $result = mysqli_query($connection,$sql);
                                           $chart_data="";
                                            while ($row = mysqli_fetch_array($result)) { 
                                            $Date[]  = $row['DateSigned']  ;
                                            $sales[] = $row['sales'];
                                                                 
                                           }
                                             }?>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>Signed Pap</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Installed pap</li>
        <li class="list-inline-item"><i class="fa fa-circle mr-2 text-black"></i>Turned On Pap</li>
			</ul>
			<div class="chart-container-1">
			  <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0"><?php
                                             $query="SELECT COUNT(*) as SignedPaP from papdailysales where DATE(DateSigned) = CURDATE()";
                                             $data=mysqli_query($connection,$query);
                                             while($row=mysqli_fetch_assoc($data)){
                                             echo $row['SignedPaP']."<br><br>";
                                              }
                                              ?></h5>
			   <small class="mb-0">Daily Signing <span> <i class="fa fa-arrow"></i></span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0"><?php
                                             $query="SELECT COUNT(*) as dailyinstalled from papinstalled where DATE(DateInstalled) = CURDATE()";
                                             $data=mysqli_query($connection,$query);
                                             while($row=mysqli_fetch_assoc($data)){
                                             echo $row['dailyinstalled']."<br><br>";
                                              }
                                              ?></h5>
			   <small class="mb-0">Daily Installation <span> <i class="fa fa-arrow"></i></span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0"><?php
                                            $query="SELECT COUNT(*) as dailyturnedon from turnedonpap where DATE(DateTurnedOn) = CURDATE()";
                                             $data=mysqli_query($connection,$query);
                                             while($row=mysqli_fetch_assoc($data)){
                                             echo $row['dailyturnedon']."<br><br>";
                                              }
                                              ?></h5>
			   <small class="mb-0">Daily Turned On <span> <i class="fa fa-arrow-"></i></span></small>
		     </div>
		   </div>
		 </div>
		 
		</div>
	 </div>


   <?php
                                  if (!$connection) {
                                    # code...
                                  echo "Problem in database connection! Contact administrator!" . mysqli_error();
                                      }else{
                                      $sql ="SELECT  Region, COUNT(Region) as buildings FROM building GROUP BY Region HAVING COUNT(Region)>1 OR COUNT(Region)=1";
                                      $result = mysqli_query($connection,$sql);
                                      $chart_data="";
                                      while ($row = mysqli_fetch_array($result)) { 
 
                                      $Region[]  = $row['Region']  ;
                                      $Build[] = $row['buildings'];
                                       }
                                    }?>
     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Buildings Per Region
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
             <?php
                                  
                                  if (!$connection) {
                                      # code...
                                     echo "Problem in database connection! Contact administrator!" . mysqli_error();
                                          }else{
                                           $sql ="SELECT  DateInstalled,COUNT(DateInstalled) as dailyinstallation FROM papinstalled GROUP BY DateInstalled HAVING COUNT(DateInstalled)>1 OR COUNT(DateInstalled)=1 AND `DateInstalled` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
                                           $result = mysqli_query($connection,$sql);
                                           $chart_data="";
                                            while ($row = mysqli_fetch_array($result)) { 
                                            #$Date[]  = $row['DateInstalled']  ;
                                            $install[] = $row['dailyinstallation'];
                                                                 
                                           }
                                             }?>
            <!--  <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>-->
              </div>
             </div>
           </div>
           <?php
                                  
                                  if (!$connection) {
                                      # code...
                                     echo "Problem in database connection! Contact administrator!" . mysqli_error();
                                          }else{
                                           $sql ="SELECT  DateTurnedOn,COUNT(DateTurnedOn) as turnedon FROM turnedonpap GROUP BY DateTurnedOn HAVING COUNT(DateTurnedOn)>1 OR COUNT(DateTurnedOn)=1 AND `DateTurnedOn` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
                                           $result = mysqli_query($connection,$sql);
                                           $chart_data="";
                                            while ($row = mysqli_fetch_array($result)) { 
                                            #$Date[]  = $row['DateInstalled']  ;
                                            $turnedon[] = $row['turnedon'];
                                                                 
                                           }
                                             }?>
           <div class="card-body">
		     <div class="chart-container-2">
               <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i> <?php echo json_encode($Region[0]); ?></td>
                   <td><?php echo json_encode($Build[0]); ?></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i><?php echo json_encode($Region[1]); ?></td>
                   <td><?php echo json_encode($Build[1]); ?></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-2 mr-2"></i><?php echo json_encode($Region[2]); ?></td>
                   <td><?php echo json_encode($Build[2]); ?></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-3 mr-2"></i><?php echo json_encode($Region[3]); ?></td>
                   <td><?php echo json_encode($Build[3]); ?></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-3 mr-2"></i><?php echo json_encode($Region[4]); ?></td>
                   <td><?php echo json_encode($Build[4]); ?></td>
                   <td></td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
	</div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">PAP MASTER RECORD
		  <div class="card-action">
     <div class="form-outline"><input type="search" id="myInput" onkeyup="myFunction()"class="form-control" placeholder="Search by Name.." aria-label="Search" /></div>
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
             <!-- <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>-->
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless" id="myTable">
                  <thead>
                   <tr>
                   <th>PAP Code</th>
                   <th>Building Name</th>
                   <th>Building Code</th>
                   <th>Region</th>
                   <th>Champ Name</th>
                   <th>Client Name</th>
                   <th>Client Contact</th>
                   <th>MAC Address</th>
                   <th>Pap Status</th>
                   <th>Date Turned On</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                   <?php
   
   $query=mysqli_query($connection,"SELECT PapCode,BuildingName,BuildingCode,Region,ChampName,ClientName,ClientContact,Upper(MacAddress) as Mac,PapStatus,DateTurnedOn from turnedonpap WHERE DateTurnedOn >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) ");
   while($row=mysqli_fetch_assoc($query)){
       echo "<tr>";
      # echo "<td>",$row['No'],"</td>";
       echo "<td>",$row['PapCode'],"</td>";
       echo "<td>",$row['BuildingName'],"</td>";
       echo "<td>",$row['BuildingCode'],"</td>";
       echo "<td>",$row['Region'],"</td>";
       echo "<td>",$row['ChampName'],"</td>";
       echo "<td>",$row['ClientName'],"</td>";
       echo "<td>",$row['ClientContact'],"</td>";
       echo "<td>",$row['Mac'],"</td>";
       echo "<td>",$row['PapStatus'],"</td>";
       echo "<td>",$row['DateTurnedOn'],"</td>";
       echo "</tr>";
   }
   ?>
                   </tr>
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer--
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright ?? Konnect 2022
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="../assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="../assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="../assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="../assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="../assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
   var ctx = document.getElementById('chart1').getContext('2d');
		
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: <?php echo json_encode($Date); ?>,
					datasets: [{
						label: 'Signed Pap',
						data: <?php echo json_encode($sales); ?>,
						backgroundColor: '#fff',
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 3
					}, {
						label: 'Installed Pap',
						data: <?php echo json_encode($install); ?>,
						backgroundColor: "rgba(255, 255, 255, 0.25)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					},{
						label: 'Turned On Pap',
						data: <?php echo json_encode($turnedon); ?>,
						backgroundColor: "rgba(191, 191, 191)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}
          ]
				},
			options: {
				maintainAspectRatio: false,
				legend: {
				  display: false,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  displayColors:false
				},	
			  scales: {
				  xAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});  
		
		
    // chart 2

		var ctx = document.getElementById("chart2").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: <?php echo json_encode($Region); ?>,
					datasets: [{
						backgroundColor: [
							"#ffffff",
							"rgba(255, 255, 255, 0.70)",
							"rgba(255, 255, 255, 0.50)",
							"rgba(255, 255, 255, 0.20)"
						],
						data: <?php echo json_encode($Build); ?>,
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
				maintainAspectRatio: false,
			   legend: {
				 position :"bottom",	
				 display: false,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				}
				,
				tooltips: {
				  displayColors:false
				}
			   }
			});
		
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
