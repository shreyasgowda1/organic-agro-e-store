<?php 
$db="greenzone";
$user="root";
$pass="";
$server="localhost";
$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO `response`(ownername, username, product_id, quantity, status, message)values('$a','$b','$c','$d','$e','$f')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Response Sent successfully ");
            window.location="viewprequest.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>