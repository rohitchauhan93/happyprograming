<?php


session_start();
 $agn_id=$_SESSION['agents_idd'];
 $_SESSION['last_login_timestamp'] = time();
  $last_activity=$_SESSION['LAST_LOGIN_ACTIVITY'];
include 'lib/db.php';
 if(isset($_SESSION['agents_idd']))
 {
 if((time() - $_SESSION['last_login_timestamp']) > 60) // Time in Seconds
 {
 header('location:logout.php');
 }
 else
 {
	 /*
 $_SESSION['last_login_timestamp'] = time();
 echo "<h1 align='center'>Welcome ".$_SESSION["agents_idd"]. "</h1>";
 echo "<h3 align='center'>Automatic Logout after 1 minute of inactive</h3>";
 echo "<p align='center'><a href='logout.php'>Logout</a></p>";
 */
 }
}
else
{
 header('Location:Login_55/');
}
if(isset($_GTE['check_delet']))
{
  echo "<script>alert('Vendor Data has been Delete Successfully');</script>";
}



$Vendor_name="";
$Vendor_id="";
$Vendor_user_id="";
$Vendor_password="";
$Vendor_contactp="";
$email="";
$Vendor_mobile="";
$address="";
$Vendor_city="";
$Vendor_state="";
$Vendor_country="";
$Vendor_currency="";
$last_log="";
include 'lib/db.php';
     $run_query1=mysqli_query($conn,"SELECT * FROM `vendor_add`");
     foreach($run_query1 as $row)

     { $buyer_name[]=$row['BUYER_NAME'];
        $Vendorname[]=$row['VENDOR_NAME'];
        $Vendorid[]=$row['VENDOR_ID'];
       $Vendor_id12[]=$row['ID'];
       $vender_clientcode[]=$row['VENDOR_CODE'];
       $Vendor_password1[]=$row['PASS_WORD'];
       $Vendor_contactp2[]=$row['CONTACT_PEOPLE'];
       $email3[]=$row['EMAIL_ID'];
       $Vendor_mobile4[]=$row['MOBILE_NO'];
       $address5[]=$row['ADDRESS'];
       $Vendor_city6[]=$row['CITY'];
       $Vendor_state7[]=$row['STATE'];
      $Vendor_country8[]=$row['COUNTRY'];
       $Vendor_currency9[]=$row['CURRENCY'];
       $logo10[]=$row['LOGO_IMG'];
       $last_log11[]=$row['LAST_LOGIN_ACTIVITY'];
     
      }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>One View</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="pop/css/style.css">

  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>PP&nbsp;<span>ASSOCIATES</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages
                  </a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span> Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span> New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="login.html">Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
            <a href="profile.html"><img src="img/PP-A.jpeg" class="img-circle" width="80"></a>
          </p>
          <h5 class="centered">Pranav Mittal</h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li>
                <a href="general.html">General</a>
              </li>
              <li>
                <a href="buttons.html">Buttons</a>
              </li>
              <li>
                <a href="panels.html">Panels</a>
              </li>
              <li>
                <a href="font_awesome.html">Font Awesome</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li>
                <a href="grids.html">Grids</a>
              </li>
              <li>
                <a href="calendar.html">Calendar</a>
              </li>
              <li>
                <a href="gallery.html">Gallery</a>
              </li>
              <li>
                <a href="todo_list.html">Todo List</a>
              </li>
              <li>
                <a href="dropzone.html">Dropzone File Upload</a>
              </li>
              <li>
                <a href="inline_editor.html">Inline Editor</a>
              </li>
              <li>
                <a href="file_upload.html">Multiple File Upload</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li>
                <a href="blank.html">Blank Page</a>
              </li>
              <li>
                <a href="login.html">Login</a>
              </li>
              <li>
                <a href="lock_screen.html">Lock Screen</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="invoice.html">Invoice</a>
              </li>
              <li>
                <a href="pricing_table.html">Pricing Table</a>
              </li>
              <li>
                <a href="faq.html">FAQ</a>
              </li>
              <li>
                <a href="404.html">404 Error</a>
              </li>
              <li>
                <a href="500.html">500 Error</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li>
                <a href="form_component.html">Form Components</a>
              </li>
              <li>
                <a href="advanced_form_components.html">Advanced Components</a>
              </li>
              <li>
                <a href="form_validation.html">Form Validation</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li class="active">
                <a href="basic_table.html">Basic Table</a>
              </li>
              <li>
                <a href="responsive_table.html">Responsive Table</a>
              </li>
              <li>
                <a href="advanced_table.html">Advanced Table</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li>
                <a href="morris.html">Morris</a>
              </li>
              <li>
                <a href="chartjs.html">Chartjs</a>
              </li>
              <li>
                <a href="flot_chart.html">Flot Charts</a>
              </li>
              <li>
                <a href="xchart.html">xChart</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li>
                <a href="lobby.html">Lobby</a>
              </li>
              <li>
                <a href="chat_room.html"> Chat Room</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>One View Vendor</h3>
        
          <!-- /col-md-12 -->
          
               
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Vendors List</h4>
                <hr>
                <thead>
                  <tr>
                    
                    <th> <i ></i>BUYER-NAME</th>
                    <th><i></i>VENDOR-NAME</th>
                    <th><i ></i>USER_ID</th>
                    <th><i ></i> PASSWORD</th>
                    <th><i></i>VENDOR-CODE</th>
                    <th><i></i>CONTACT-PERSON</th>
                    <!---<th >EMAIL-ID</th>------>
                    <th><i></i>VENDOR-CLIENT CODE</th>
                    <th><i ></i>MOBILE-NO</th>
                    <th><i ></i>ADDRESS</th>
                    <th><i></i>COUNTRY</th>
                    <th ><li></li>STATE</th>
                    <th><i ></i>CITY</th>
                 
                    <th><i ></i>LAST LOGIN</th>
                   <!--- <th><i></i>LOGO</th>---->
                    <th><i></i>ACTIONS</th>
                  
                    <?php  
include 'lib/db.php';
                    
  $search_id=mysqli_query($conn,"SELECT COUNT(ID)  FROM `Vendor_add`;");
  //$new_id=100;
    while($information=mysqli_fetch_row($search_id))
    {
      $new_id=$information[0];
      $reviseloop=$new_id-1;
  
   }

   $no=0;
while($no<=$reviseloop){
  
echo "<th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>$buyer_name[$no]</td>
                  <td >$Vendorname[$no]</td>
                   <td>$Vendorid[$no]</td>
                    <td>$Vendor_password1[$no]</td>
                    <td>$vender_clientcode[$no]</td>
                    <td>$Vendor_contactp2[$no]</td>
                    
                    <td>$Vendor_mobile4[$no]</td>
                    <td>$address5[$no]</td>
                    <td>$Vendor_city6[$no]</td>
                    <td>$Vendor_state7[$no]</td>
                    <td>$Vendor_country8[$no]</td>
                    <td>$Vendor_currency9[$no]</td>
                    <td>$last_log11[$no]</td>
                    <!---<td ><img src='Logo_images/$logo10[$no]' height='60' width='60'></td>-->
                    <td> 
                    
                      <a href='?id=$Vendor_id12[$no]'  data-js='open' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                      <a href='?id=$Vendor_id12[$no]#popup1'  data-js='open'  class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button></td>
                    <td>";

                    $no++;
}
                    ?>
                     
                    </td>
                  </tr>
                  
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
      
          &copy; Copyrights <strong>PP Associates</strong>. All Rights Reserved
       
        <div class="credits">

           Powered By: &nbsp;<a href="https://codexa.in/">Codexa Technologies</a>
        </div>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    	
	<div id="popup1" class="overlay">
		<div class="popup">
			 <?php echo $ID=$_GET['id'];
      echo "rohit";
      ?>
			<a class="close" href="#">&times;</a>
			<div class="content">
			<div class="modal-body">
      <center><img src="images/sent.png" alt="" width="50" height="46"></center>
     
                        <center><h3>Are you sure want to delete this Data?</h3></center>
                        <center><div class="m-t-20"> <a href="Vendor-view.php" class="btn btn-danger" class="btn btn-white" >Close</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo "<a href='vendor_delete/vendor-delete_data.php?final_delid=$ID' class='btn btn-danger'>Delete</a>"; ?>
                                </center>
</div>
		</div>
	</div>
	
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

    <script  src="pop/js/index.js"></script>


</body>

</html>
