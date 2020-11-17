<?php 
include_once('../connection.php');

if(isset($_GET['mask']))
{
	// echo "string";
	// exit();
	$delete_id = $_GET['mask'];

	$sql = mysqli_query($conn,"DELETE FROM customer WHERE customer_id = '$delete_id'");
	if($sql)
	{
		header('location:../display_list.php');
	}
	else
	{
		echo mysqli_error($conn);
	}


}


 ?>