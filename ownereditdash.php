<!DOCTYPE html>
<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
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
    <title>GREEN ZONE</title>
	<script type="text/javascript">
     function initGeolocation()
     {
        if( navigator.geolocation )
        {
           // Call getCurrentPosition with success and failure callbacks
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
           alert("Sorry, your browser does not support geolocation services.");
        }
     }

     function success(position)
     {

         document.getElementById('long').value = position.coords.longitude;
         document.getElementById('lat').value = position.coords.latitude
     }

     function fail()
     {
        // Could not obtain location
     }

   </script>  
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
         
        </div>
        
      </div>
    
      
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
            <h3 class="tile-title">Update Profile</h3>
            <div class="tile-body">
              <form class="form-horizontal" action="" method="post" >
			      	<?php
	 error_reporting(0);
	 require('db.php');
	 $c=$_SESSION['username'];


$query="SELECT * from owner where username='$c'"; 



if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{


?>   
                <div class="form-group row">
                  <label class="control-label col-md-3">FIRST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" style="text-transform:uppercase" name="p1" value="<?php echo $data['firstname']; ?>" placeholder="Enter first name" required>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">LAST NAME</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" style="text-transform:uppercase" name="p2" value="<?php echo $data['secondname']; ?>" placeholder="Enter last name" required>
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">PHONE NUMBER</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="number" name="p3" maxlength="13" value="<?php echo $data['phone']; ?>" placeholder="Enter phone number" required>
                  </div>
				  </div>
               <div class="form-group row">
                  <label class="control-label col-md-3">LONGITUDE</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="p66" TYPE="text" required  ID="long" VALUE="">
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">LATITUDE</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="p77" TYPE="text" required  ID="lat" VALUE="">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">USER ID</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" ID="<?php echo $_SESSION['username']; ?>",  name="p4" value="<?php echo $_SESSION['username']; ?>" placeholder="Enter email address" readonly>
                  </div>
                </div>
				
                <div class="form-group row" >
                  <label class="control-label col-md-3">ADDRESS</label>     
                  <div class="col-md-8" id="locationField" style="text-transform:uppercase">
                    <textarea class="form-control" rows="2" id="autocomplete" name="p7" placeholder="Enter your address"
             onFocus="geolocate()" type="text" required><?php echo $data['address']; ?></textarea>
                  </div>
                </div>
			
	<script>
     

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPJaq8h4L3_LgeKhYA9c3ZS6rLuQF75gU&libraries=places&callback=initAutocomplete"
        async defer></script><br><br>
                <div class="form-group row">
                  <label class="control-label col-md-3">CITY</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="p8" value="<?php echo $data['city']; ?>" placeholder="Enter city" required>
                  </div>
                </div>
					<div class="form-group row">
            <label class="control-label col-md-3">BLOOD GROUP</label>
              <select name="p9" required value="<?php echo $data['blood']; ?>" >
              <option value="A+">A+</option>
              <option value="B+">B+</option>
              <option value="A-">A-</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O">O+</option>
              <option value="O">O-</option>    
              
              
              
            </select>
          </div>
		  <div class="form-group row">
                  <label class="control-label col-md-3">QR CODE</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="file" name="p10" value="<?php echo $data['qrcode']; ?>" placeholder="Enter qr code" required>
                  </div>
                </div>
<?php } ?> 
                <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <input type = "submit" value ="Submit" name = "submit"/>
                </div>
              </div>
            </div>
              </form>
            </div>
           
          </div>
        </div>

      </div>
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
            $sql = "update owner set firstname='".$_POST["p1"]."',secondname='".$_POST["p2"]."',phone='".$_POST["p3"]."',email='".$_POST["p4"]."',address='".$_POST["p7"]."',city='".$_POST["p8"]."',blood='".$_POST["p9"]."' ,qrcode='".$_POST["p10"]."',longi='".$_POST["p66"]."',latti='".$_POST["p77"]."'where username='".$_POST["p4"]."'";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
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