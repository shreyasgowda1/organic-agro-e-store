<?php 
$db="greenzone";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO `request`(username, product_id, message,quantity)values('$a','$b','$c','$d')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Request Sent successfully ");
            window.location="searchproduct.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>