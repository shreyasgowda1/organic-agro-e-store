
<?php


include("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
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
         
            <li><a class="dropdown-item" href="ownereditdash.php"><i class="fa fa-user fa-lg"></i> EDIT PROFIL</a></li>
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
        <li><a class="app-menu__item " href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="searchproduct.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Search Product</span></a></li>
        <li><a class="app-menu__item " href="viewresponse.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Response</span></a></li>
        <li><a class="app-menu__item active" href="sendfeedback.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Send Feedback</span></a></li>
		<li><a class="app-menu__item " href="viewnotification.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Notifications</span></a></li>
		<li><a class="app-menu__item " href="viewownernoti.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Owner Notifications</span></a></li>
		<li><a class="app-menu__item " href="searchbusiness.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Search Utility Service</span></a></li>       
	   <li><a class="app-menu__item " href="userlogout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a></li>

		 
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div> 
          <h1><i class="fa fa-dashboard"></i>SEND FEEDBACK </h1>
         
        </div>
        
      </div>
     <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form action="" method="post">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">USERNAME</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p1" required  value="<?php echo $_SESSION['username']; ?>" readonly >
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">HOPCOMS NAME</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p2" required  placeholder="HOPCOMS NAME">
                  </div>
				 




     <label >RATING</label>
	 </br>
 
  <div class="rate" class="form-group">

    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>



				  </br>
		 </br> </br>
                  <div class="form-group">
                    <label for="exampleTextarea">FEEDBACK</label>
                    <textarea class="form-control" type="TEXT" id="exampleTextarea"  name="p3" required  rows="3"></textarea>
                  </div>
                
				  
                
              </div>
		
              
           
          </div>
        </div>
      </div>
       </div>
      
		
		 <div class="tile-footer">
               <input   class="btn btn-primary"  type = "submit" value ="Submit" name = "submit"/>
            </div>
			</div>
		</form>
    <?php
         if(isset($_POST["submit"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "greenzone";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO feedback ( username,ownername, feedback,rating) VALUES ('".$_POST["p1"]."','".$_POST["p2"]."','".$_POST["p3"]."','".$_POST["rate"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
    </main>
	  
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