
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
	    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ORGANIC AGRO-E-STORE</title>
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
  </head >
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Organic Store</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
          
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
        <li><a class="app-menu__item " href="admindashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="viewowner.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Nursery Owner</span></a></li>
        <li><a class="app-menu__item " href="senanoti.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Send Notification</span></a></li>
        <li><a class="app-menu__item active" href="addbusi.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Add Utility Service</span></a></li>
        <li><a class="app-menu__item " href="viewbusi.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">View Utility Service</span></a></li>
        <li><a class="app-menu__item " href="adminlogout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a></li>
		</ul>
    </aside>
   
    <main class="app-content">
	
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>ADD UTILITY SERVICE</h1>
         
        </div>
       
      </div>
	   <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form action="" method="post">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">SERVICE NAME</label>
                    <input class="form-control" type="TEXT" aria-describedby="emailHelp" name="p1" required placeholder="SERVICE NAME" >
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">SERVICE TYPE</label>
			<select class="form-control" id="demoSelect" name="p2">
			  <option value="NULL">SELECT SERVICE TYPE</option>
              <option value="FERTILIZER">FERTILIZER </option>
              <option value="HOPCOMS">HOPCOMS</option>
			  <option value="NURSERY">NURSERY</option>
            </select>                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SERVICE TIME FROM</label>
                    <input class="form-control" type="TIME" aria-describedby="emailHelp" name="p3" required  placeholder="SERVICE TIME FROM">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">SERVICE TIME TO</label>
                    <input class="form-control" type="TIME" aria-describedby="emailHelp" name="p4" required  placeholder="SERVICE TIME TO">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">SERVICE IMAGE</label>
                    <input class="form-control" type="FILE" aria-describedby="emailHelp" name="p5" required  placeholder="SERVICE IMAGE">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">SERVICE CITY</label>
								<select class="form-control" id="demoSelect" name="p6">
                   <option value="SelectPlace"> Select Place </option>
								<option value="Banglore"> Banglore </option>
								<option value="Hyderabad"> Hyderabad </option>
								<option value="Chennai"> Chennai </option>
								<option value="Mumbai"> Mumbai </option>
								<option value="Thiruvananthapuram"> Thiruvananthapuram </option>
								  </select> 
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">SERVICE ADDRESS</label>
                    <textarea class="form-control" type="TEXT" aria-describedby="emailHelp" name="p7" id="autocomplete" rows="3" required onFocus="geolocate()" placeholder="SERVICE ADDRESS"></textarea>
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
        async defer></script>
                  <div class="form-group">
                    <label for="exampleTextarea">ABOUT SERVICE</label>
                    <textarea class="form-control" id="exampleTextarea"  name="p8" required placeholder="ABOUT SERVICE" rows="3"></textarea>
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
            $sql = "INSERT INTO `business`(name, type, timefrom, timeto, image, city, address, about) VALUES ('".$_POST["p1"]."','".$_POST["p2"]."','".$_POST["p3"]."','".$_POST["p4"]."','".$_POST["p5"]."','".$_POST["p6"]."','".$_POST["p7"]."','".$_POST["p8"]."')";

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