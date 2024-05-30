
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
    <header class="app-header"><a class="app-header__logo" href=""> Organic Store</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
         <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> EDIT PROFILE</a></li>
            <li><a class="dropdown-item" href="userlogout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
        <li><a class="app-menu__item " href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item active" href="searchproduct.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Search Product</span></a></li>
        <li><a class="app-menu__item " href="viewresponse.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Response</span></a></li>
        <li><a class="app-menu__item " href="sendfeedback.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Send Feedback</span></a></li>
		<li><a class="app-menu__item " href="viewnotification.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Notifications</span></a></li>
		<li><a class="app-menu__item " href="viewownernoti.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Owner Notifications</span></a></li>
		<li><a class="app-menu__item " href="searchbusiness.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Search Utility Service</span></a></li>       
	   <li><a class="app-menu__item " href="userlogout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a></li>

		 
      </ul>
    </aside>
   <main class="app-content">
      <div class="app-title">
        
        
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEARCH NEARBY PRODUCTS</h3>
            <div class="tile-body">
              <form class="row"  action="" method="post">
                <div class="form-group col-md-3">
                  <label class="control-label">SELECT PRODUCT TYPE</label>
                  
              <select class="form-control" id="demoSelect" name="p1">
			  <option value="NULL">SELECT PRODUCT TYPE</option>
        <option value="Seeds">SEEDS</option>
              <option value="Vegetables">VEGETABLES</option>
			  <option value="Fruits">FRUITS</option>
            </select>
                </div>
 <div class="form-group col-md-3">
                  <label class="control-label">SELECT CITY</label>
<select class="form-control" id="demoSelect" name="p2">
                  <option value="NULL">SELECT CITY</option>
              
              <option value="mysore">mysore</option>
              <option value="mandya">mandya</option>
			  
            </select>
                </div>
                 
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary btn-lg btn-block" type = "submit" value ="Submit" name = "submit" >SEARCH</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php
        $a = isset($_POST['p1']) ? $_POST['p1'] : '';
        $b = isset($_POST['p2']) ? $_POST['p2'] : '';
        
$query="SELECT product.id,product.name,product.ownername,product.type,product.about,product.care,product.photo,product.video,product.price,product.height,product.season,product.quantity FROM product join owner on product.ownername = owner.username where product.type='$a' and owner.city='$b'";
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
         </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
			 <div class="row invoice-info">
                <div class="col-4">PRODUCT DETAILS			
                  <address><strong><h1><?php echo $data['name']; ?></h1></strong><br><h3>NURSERY NAME:<BR><?php echo $data['ownername']; ?></h3><br>Type: <?php echo $data['type']; ?><br><?php echo $data['about']; ?><br><?php echo $data['care']; ?></address>
                </div>              
              </div>
              <div class="row mb-4">			  
			  <div class="col-6">
				<img src="img/<?php echo $data['photo']; ?>" width="470" height="315"/>  <br/>     
                </div>              
                <div class="col-6">
                   <iframe width="470" height="315"
src="<?php echo $data['video']; ?>">
</iframe>
                </div>
              </div>					 
              <div class="row invoice-info">
                <div class="col-4">PRICE			
                  <address><strong><h2>&#8377 <?php echo $data['price']; ?>/-</h2></strong><br>Height:<?php echo $data['height']; ?><br>
				  Season:<?php echo $data['season']; ?><br></address>
				  </br> </div>
                
          <div class="col-4">QUANTITY			
                  <address><strong><h2><?php echo $data['quantity']; ?> Kgs</h2></strong>
				 </address>
				  </br> </div>
              </div>
			     <form class="row"  action="requestdb.php" method="post">
			   <div class="form-group col-md-4">
               
       
			<input class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" name="p1" readonly />
                </div>
                 <div class="form-group col-md-4">
               
       
			<input class="form-control" type="text" value="<?php echo $data['id']; ?>" name="p2" readonly />
                </div>
				
				
				    <div class="form-group col-md-4"> 
               
       
			<input class="form-control" type="text" placeholder="Quantity" name="p4"  />
                </div>
				
				
				
				
                <div class="form-group col-md-4">
               
       
			<textarea class="form-control" type="text" name="p3"></textarea>
                </div>
               
                <div class="form-group col-md-4 align-self-end">
                   
					 <button class="btn btn-primary btn-lg btn-block" type = "submit" value ="Submit" name = "submit" >SEND REQUEST</button>
                </div>
				</form>
            </section>
          </div>
        </div>
      </div>
      <?php  } ?>
	  
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