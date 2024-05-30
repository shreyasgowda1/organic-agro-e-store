<?php
$db="greenzone";
$user="root";
$pass="";
$server="localhost";
$a = $_GET['id'];



$con=mysqli_connect($server,$user,$pass,$db);
if($con){
	
	$sql="delete from business where id='$a'";
	if($con->query($sql)===TRUE){
		echo"Record deleted";?>
		<script type="text/javascript">
            window.alert("business successfully deleted");
            window.location="viewbusi.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>