<?php
$db="greenzone";
$user="root";
$pass="";
$server="localhost";
$a = $_GET['id'];



$con=mysqli_connect($server,$user,$pass,$db);
if($con){
	
	$sql="delete from owner where username='$a'";
	if($con->query($sql)===TRUE){
		echo"Record deleted";?>
		<script type="text/javascript">
            window.alert("owners successfully deleted");
            window.location="viewowner.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>