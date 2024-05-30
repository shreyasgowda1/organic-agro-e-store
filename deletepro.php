<?php
$db="greenzone";
$user="root";
$pass="";
$server="localhost";
$a = $_GET['id'];



$con=mysqli_connect($server,$user,$pass,$db);
if($con){
	
	$sql="delete from product where id='$a'";
	if($con->query($sql)===TRUE){
		echo"Record deleted";?>
		<script type="text/javascript">
            window.alert("product successfully deleted");
            window.location="viewproduct.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>