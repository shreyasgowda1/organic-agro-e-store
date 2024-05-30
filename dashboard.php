
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
	<script type="text/javascript">
var citiesByState = {
Chilli_Plant: ["Water soaked lesion formation at collar region Infected areas turn brown and rot.","On leaves, anthracnose generally appears first as small, irregular yellow or brown spots.","water-soaked areas develop on leaves, and apical growing points become blighted"],
Paddy: ["Leaf spots are typically elliptical with gray-white centers and brown to red-brown margins","Plants affected by tungro exhibit stunting and reduced tillering. Their leaves become yellow or orange-yellow, may also have rust-colored spots."],
Tomoto: ["Spots enlarge and concentric rings in a bull’s-eye pattern may be seen in the center of the diseased area","Young leaf lesions are small and appear as dark, water-soaked spots","Pale green or yellowish spots on the upper leaf surface, which enlarge and turn a distinctive yellow"],

}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
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
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="searchproduct.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Search Product</span></a></li>
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
        <div> 
          <h1><i class="fa fa-dashboard"></i>profile </h1>
          <div class="tile">
            <h3 class="tile-title">WELCOME USERS</h3>
            
              <li>DIGITAL MARKETING FOR FARMERS - best farmer responsive app for online shopping in Mysore. Buy plants, seeds,
pesticides, fertilizers online in Mysore. Greenzone helps user to find the nearest nursery. Can
find plant nursery near you on a click. User can get directions to nursery through google map.
User can register his / her own nursery. The Best application for sale of flowers, plants and
seeds, the best quality and price products exist. This responsive application helps you acquire
the finest plants, flowers and also teaches you how to take care of them.</li>
   
            
            <p>Currently farmers go on searching the plants and roaming around the nearest places in search
of nurseries. So the quality, time of the duration to get the delivery, price and other related
things, it will be done for each and every nursery they visit.</p>
          </div>
        </div>
        
      </div>
     <?php
	 error_reporting(0);
	 $a=$_SESSION['username'];
	 $query="SELECT * FROM users where username='$a'"; // selecting data through mysql_query()
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
      
      

		
<?php
	 error_reporting(0);
	 
	 $a=$_POST['p1'];
$b=$_POST['p2'];
$a1='Chilli_Plant';
$b1='Water soaked lesion formation at collar region Infected areas turn brown and rot.';
$b2='On leaves, anthracnose generally appears first as small, irregular yellow or brown spots.';
$b3='water-soaked areas develop on leaves, and apical growing points become blighted';



$c='Paddy';
$c1='Leaf spots are typically elliptical with gray-white centers and brown to red-brown margins';
$c2='Plants affected by tungro exhibit stunting and reduced tillering. Their leaves become yellow or orange-yellow, may also have rust-colored spots.';



$d='Tomoto';
$d1='Spots enlarge and concentric rings in a bull’s-eye pattern may be seen in the center of the diseased area';
$d2='Young leaf lesions are small and appear as dark, water-soaked spots';
$d3='Pale green or yellowish spots on the upper leaf surface, which enlarge and turn a distinctive yellow';




if($a1==$a&&$b==$b1)
{
?>
		<!-- Form Name 
		<legend >Edit</legend> -->

	

		<!-- Text input-->
	
		<div class="row">
		<h3>Symptoms: Water soaked lesion formation at collar region Infected areas turn brown and rot</h3> <br>
		<h3>Treatment</h3>
		<h4>Oospores in soil in case of Pythium Sclerotia in soil in case of Rhizoctonia
	</h4>
			<iframe width="420" height="315"
src="https://www.youtube.com/embed/4zs9QsWi0YY">
</iframe>
		
		</div>
      <?php  }?>


  <?php if($a1==$a&&$b==$b2) {?>
  
  <div class="row">
		<h3>Symptoms: On leaves, anthracnose generally appears first as small, irregular yellow or brown spots..</h3> <br>
		<h3>Treatment</h3>
		<h4>Remove and destroy any infected plants in your garden. For trees, prune out the dead wood and destroy the infected leaves.</h4>
			<iframe width="420" height="315"
src="https://www.youtube.com/embed/56V6EdvMpE4">
</iframe>
		
		</div>
  
  
  
    <?php  }?>
  
  <?php if($a1==$a&&$b==$b2) {?>
  
  <div class="row">
		<h3>Symptoms: water-soaked areas develop on leaves, and apical growing points become blighted</h3> <br>
		<h3>Treatment</h3>
		<h4>fungicide sprays may help reduce disease damage.</h4>
		<iframe width="420" height="315"
src="https://www.youtube.com/embed/Lf6LrtuqFm8">
</iframe>
		</div>
  
  
  
    <?php  }?>
	
	
	
	 
	
	
	 <?php if($c==$a&&$b==$c1) {?>
  
  <div class="row">
		<h3>Symptoms: Leaf spots are typically elliptical with gray-white centers and brown to red-brown margins</h3> <br>
		<h3>Treatment</h3>
		<h4>Grow rice in fields where flood levels are easily maintained. Damage from blast can be reduced by keeping soil flooded 2 to 4 inches deep from the time rice plants are 6 to 8 inches tall until draining for harvest. Draining for straighthead is incompatible with the flooding required for blast control, so avoid fields with a history of straighthead and varieties susceptible to straighthead, or plant blast-resistant varieties in these fields.<h4>
		<iframe width="420" height="315"
src="https://www.youtube.com/embed/AE7VgG5db0s">
</iframe>
		</div>
  
  
  
    <?php  }?>
	
	
	 <?php if($c==$a&&$b==$c2) {?>
  
  <div class="row">
		<h3>Symptoms: Plants affected by tungro exhibit stunting and reduced tillering. Their leaves become yellow or orange-yellow, may also have rust-colored spots.</h3> <br>
		<h3>Treatment</h3>
		<h4>Leaf yellowing can be minimized by spraying 2 % urea mixed with Mancozeb at 2.5 gm/lit.<h4>
<iframe width="420" height="315"
src="https://www.youtube.com/embed/BftiT1WANdo">
</iframe>
		</div>
  
  
  
  
  
    <?php  }?>
	
	
	 <?php if($d==$a&&$b==$d1) {?>
  
  <div class="row">
		<h3>Symptoms: Spots enlarge and concentric rings in a bull’s-eye pattern may be seen in the center of the diseased area</h3> <br>
		<h3>Treatment</h3>
		<h4>Use pathogen-free seed and do not set diseased plants in the field. Use crop rotation, eradicate weeds and volunteer tomato plants, space plants to not touch, mulch plants, fertilize properly, don’t wet tomato plants with irrigation water, and keep the plants growing vigorously. Trim off and dispose of infected lower branches and leaves.</h4>
		<iframe width="420" height="315"
src="https://www.youtube.com/embed/a0m3oXKhLDQ">
</iframe>
		
		</div>
  
  
  
    <?php  }?>
	
	 <?php if($d==$a&&$b==$d2) {?>
  
  <div class="row">
		<h3>Symptoms: Young leaf lesions are small and appear as dark, water-soaked spots</h3> <br>
		<h3>Treatment</h3>
		<h4>If disease is severe enough to warrant chemical control, select one of the following fungicides: chlorothalonil (very good); copper fungicide, or mancozeb (good). See Table 1 for examples of fungicide products for home garden use. Follow the directions on the label</h4>
		
		<iframe width="420" height="315"
src="https://www.youtube.com/embed/9tLOYGpFMJE">
</iframe>
		
		</div>
  
  
  
    <?php  }?>
	
	
	
	 <?php if($d==$a&&$b==$d3) {?>
  
  <div class="row">
		<h3>Symptoms: Pale green or yellowish spots on the upper leaf surface, which enlarge and turn a distinctive yellow</h3> <br>
		<h3>Treatment</h3>
		<h4>Using a preventative fungicide program with chlorothalonil, mancozeb or copper fungicide, can control the disease..</h4>
		
		<iframe width="420" height="315"
src="https://www.youtube.com/embed/S7CCp8AwDoI">
</iframe>
		</div>
  
  
  
    <?php  }?>
	
	
	







	</div>
</div>

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
                  <label class="control-label col-md-3">BLOOD GROUP</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" value="<?php echo $data['blood']; ?>" readonly>
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