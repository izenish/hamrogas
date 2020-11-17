<?php 
include_once('../connection.php');

if(isset($_GET['mask']))
{
	// echo "string";
	// exit();
	$delete_id = $_GET['mask'];
	$value = "DELETE FROM delivered WHERE C_id = '$delete_id'";
	echo "$value";

	$sql = mysqli_query($conn,$value);
	if($sql)
	{
	header('location:../display_delivered.php');
	}
	else
	{
		echo mysqli_error($conn);
	}


}


 ?>