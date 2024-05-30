<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ORGANIC AGRO-E-STORE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
	<style>
.dropbtn {
    background-color: #687178;
    color: white;
    padding: 14px;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #226673;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ORGANIC AGRO-E-STORE</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
         
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact-us</a>
            </li>
						 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/Greenzone/faq/index.html"></a>
            </li>
			
            <li class="nav-item">
              <button onclick="myFunction()" class="dropbtn"  class="nav-link js-scroll-trigger">LOGIN/SIGNUP</button>
  <div id="myDropdown" class="dropdown-content">
    <a  href="userlogin.php">USERS</a>
    <a href="ownerlogin.php">FARMER</a>
    <a href="adminlogin.php">ADMIN</a>
	
  </div>
            </li>  
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h3 class="brand-heading">ORGANIC AGRO-E-STORE</h3>
              <p class="intro-text">WE ARE HAPPY TO HELP YOU</p>
              <a href="" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>ORGANIC AGRO-E-STORE</h2>
            <p>Digital marketing for farmmers8- best farmer responsive app for online shopping in Mysore. Buy plants, seeds, pesticides, fertilizers online in Mysore. Greenzone helps user to find the nearest nursery. Can find plant nursery near you on a click. User can get directions to nursery through google map. User can register his / her own nursery. The Best application for sale of flowers, plants and seeds, the best quality and price products exist. This responsive application helps you acquire the finest plants, flowers and also teaches you how to take care of them. </p> </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
   

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>DEVELOPER</h2>
            
              <a href="">WE ARE HAPPY TO HELP YOU</a>
               <p>WE DESIGN THIS APPLICATION IT IS PLATFORM FOR USER,BUSINESS OWNER AND ADMIN.</p>
			  
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
               
                  
                  <span class="network-name">Rimpana K S</span><br><span class="network-name"></span>9898989898<br><span class="network-name">rimpana5873@gmail.com</span>
                </a>
              </li>
			     <li class="list-inline-item">
               
                  
                  <span class="network-name">Under the guidence</span><br><span class="network-name">Spoorthy H C</span><br><span class="network-name"><br>Bangalore</span>
                </a>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </section>
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}58

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Your Website 2021-22</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
