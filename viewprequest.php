
<?php


include("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DIGITAL MARKETING FOR FARMERS</title>
	
  </head>
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">DIGITAL MARKETING</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="ownereditdash.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
				 <li><a class="dropdown-item" href="edituser.php"><i class="fa fa-sign-out fa-lg"></i> EDIT PROFILE</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
	
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['username']; ?></p>

        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="ownerdashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="addproduct.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Add Product</span></a></li>
        <li><a class="app-menu__item " href="viewproduct.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Product</span></a></li>
        <li><a class="app-menu__item " href="viewprequest.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Request</span></a></li>
        <li><a class="app-menu__item " href="viewfeedback.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Feedback</span></a></li>
		<li><a class="app-menu__item " href="sendownernoti.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Send Notification</span></a></li>
        <li><a class="app-menu__item " href="viewonoti.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Notification</span></a></li>       
	   <li><a class="app-menu__item " href="ownerlogout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a></li>

		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div> 
      
        <?php

	 
		  $a=$_SESSION['username']; 


$query="SELECT * FROM request where product_id in(select id from product where ownername='$a')"; // selecting data through mysql_query()
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "greenzone";

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()





?>
      <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
		  
		  
          <?php 
		  while($data = mysqli_fetch_array($result))
{
	?>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
             
                  
                 
					<th>Username</th>
					
					<th>Product ID</th>
					<th>Quantity</th>
					<th>Status</td>
					<th>Send message</td>
			
					
                    <th> Send Response</th>
                   
                  </tr>
                </thead>
                <tbody>
					<form class="row"  action="responsedb.php" method="post"> 
				
				 <label class="col-form-label col-form-label-lg" for="inputLarge">Owner Name:<input  class="form-control" type="text" name="p1" value="<?php echo $_SESSION['username']; ?>" readonly /></a>
                  <tr>
                   
				
					<td><input  class="form-control" type="text" name="p2" value="<?php echo $data['username']; ?>" readonly /></td>
					<td><input  class="form-control" type="text" name="p3" value="<?php echo $data['product_id']; ?>" readonly /></td>
					<td><input  class="form-control" type="text" name="p4" value="<?php echo $data['quantity']; ?>" readonly /></td>
					<td><select class="form-control" id="demoSelect" name="p5">
                  <option value="NULL">SELECT STATUS</option>
              
              <option value="approved ">approved </option>
              <option value="disapproved">disapproved</option>
			  
            </select></td>
					<td><input  class="form-control form-control-lg" id="inputLarge" type="text" name="p6"   /></td>
					
					
					
					<p> Message</p>
					<?php echo $data['message']; ?>
					
					
					
					
					<td>
					
					
					<button class="btn btn-primary" type = "submit"  >Send Response </button>
					</form></td>
                 
                  </tr>
               
                
                </tbody>
              </table>
            </div>
			
			
			     <?php  } ?>
				 <?php echo $_SESSION['username']; ?>
			
          </div>
        </div>
      </div>
 
	   
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
	
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>