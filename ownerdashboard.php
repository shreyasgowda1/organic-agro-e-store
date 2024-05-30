
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
    <title>ORGANIC AGRO-E-STORE</title>
	
  </head>
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Organic Store </a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="ownereditdash.php"><i class="fa fa-user fa-lg"></i> EDIT PROFILE</a></li>
            <li><a class="dropdown-item" href="ownerlogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
         <li><a class="app-menu__item " href="ownerlogout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a></li>

		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div> 
          <h1><i class="fa fa-dashboard"></i>profile </h1>
          <div class="tile">
            <h3 class="tile-title">WELCOME FARMERS</h3>
            <p>
              <li>ORGANIC AGRO-E-STORE - best farmer responsive app for online shopping in Mysore. Buy plants, seeds,
pesticides, fertilizers online in Mysore. Greenzone helps user to find the nearest nursery. Can
find plant nursery near you on a click. User can get directions to nursery through google map.
User can register his / her own nursery. The Best application for sale of flowers, plants and
seeds, the best quality and price products exist. This responsive application helps you acquire
the finest plants, flowers and also teaches you how to take care of them.</li>
   
</p>
            <p>Currently farmers go on searching the plants and roaming around the nearest places in search
of nurseries. So the quality, time of the duration to get the delivery, price and other related
things, it will be done for each and every nursery they visit.</p>
          </div>
        </div>
        
      </div>
     <?php
	 error_reporting(0);
	 $a=$_SESSION['username'];
	 $query="SELECT * FROM owner where username='$a'"; // selecting data through mysql_query()
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
while($data = mysqli_fetch_array($result))
{

?>
      
        <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">ABOUT ORGANIC AGRO-E-STORE</h3>
            <ul>
              <li>ORGANIC AGRO-E-STORE - best farmer responsive app for online shopping in Mysore. Buy plants, seeds,
pesticides, fertilizers online in Mysore. Greenzone helps user to find the nearest nursery. Can
find plant nursery near you on a click. User can get directions to nursery through google map.
User can register his / her own nursery. The Best application for sale of flowers, plants and
seeds, the best quality and price products exist. This responsive application helps you acquire
the finest plants, flowers and also teaches you how to take care of them.</li>
   
            </ul>
            <p>Currently farmers go on searching the plants and roaming around the nearest places in search
of nurseries. So the quality, time of the duration to get the delivery, price and other related
things, it will be done for each and every nursery they visit.</p>
          </div>
        </div>
		 <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">YOUR PROFILE</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="" method="post" >
                <div class="form-group row">
                  <label class="control-label col-md-3">FIRST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" style="text-transform:uppercase" value="<?php echo $data['firstname']; ?>" readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">LAST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" type="textonly" style="text-transform:uppercase" name="p2" value="<?php echo $data['secondname']; ?>" readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">PHONE NUMBER</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="number" value="<?php echo $data['phone']; ?>"readonly >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">USER ID</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" ID="<?php echo $_SESSION['username']; ?>",  name="p4" value="<?php echo $_SESSION['username']; ?>"  readonly>
                  </div>
                </div>
			
                <div class="form-group row">
                  <label class="control-label col-md-3">ADDRESS</label>
                  <div class="col-md-8" style="text-transform:uppercase">
                    <input class="form-control"  type="text" value="<?php echo $data['address']; ?>" readonly>
                  </div>
                </div>  
              
			 
			   <div class="form-group row">
                  <label class="control-label col-md-3">CITY</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $data['city']; ?>" readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">BLOOD GROUP</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $data['blood']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">QRCODE</label>
                  <div class="col-md-8">
                    <img src="img/<?php echo $data['qrcode']; ?>">
                  </div>
                </div>
               
              </form>
            </div>
           
          </div>
        </div>

      </div>
<?php } ?>
	  
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