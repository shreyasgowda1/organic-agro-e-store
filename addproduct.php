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
        <li><a class="app-menu__item " href="ownerdashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item active" href="addproduct.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Add Product</span></a></li>
        <li><a class="app-menu__item " href="viewproduct.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Product</span></a></li>
        <li><a class="app-menu__item " href="ownerlogout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a></li>

		 
      </ul>
    </aside>
   
    <main class="app-content">
	
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>ADD PRODUCT DETAILS</h1>
         
        </div>
       
      </div>
	   <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form action="" method="post">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">OWNER ID</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p1" required  value="<?php echo $_SESSION['username']; ?>" readonly >
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">PRODUCT NAME</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p2" required  placeholder="PRODUCT NAME">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PRODUCT TYPE</label>
                    <select class="form-control" id="demoSelect" name="p3">
			  <option value="NULL">SELECT PRODUCT TYPE</option>
              <option value="Seeds">SEEDS</option>
              <option value="Vegetables">VEGETABLES</option>
			  <option value="Fruits">FRUITS</option>
            </select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">PRODUCT PHOTO</label>
                    <input class="form-control" type="FILE" aria-describedby="emailHelp" name="p4" required  placeholder="PRODUCT PHOTO">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">PRODUCT VIDEO LINK</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p5" required  placeholder="PRODUCT VIDEO">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">PRODUCT PRICE</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p6" required  placeholder="PRODUCT PRICE">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">PRODUCT HEIGHT</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p7" required  placeholder="PRODUCT HEIGHT">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">PRODUCT SEASON</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p8" required  placeholder="PRODUCT SEASON">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleTextarea">ABOUT PRODUCT</label>
                    <textarea class="form-control" id="exampleTextarea"  name="p9" required  rows="3"></textarea>
                  </div>
                 <div class="form-group">
                    <label for="exampleTextarea"> PRODUCT CARE</label>
                    <textarea class="form-control" id="exampleTextarea"  name="p10" required  rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea"> PRODUCT QUANTITY</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p12" required  placeholder="PRODUCT QUANTITY">
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
            $sql = "INSERT INTO product ( ownername, name, type, photo, video, price, height, season, about, care, quantity) VALUES ('".$_POST["p1"]."','".$_POST["p2"]."','".$_POST["p3"]."','".$_POST["p4"]."','".$_POST["p5"]."','".$_POST["p6"]."','".$_POST["p7"]."','".$_POST["p8"]."','".$_POST["p9"]."','".$_POST["10"]."','".$_POST["12"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
			   
			   ?>
		<script type="text/javascript">
            window.alert("successfully Added");
            window.location="addproduct.php";
            </script>
			<?php 
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
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