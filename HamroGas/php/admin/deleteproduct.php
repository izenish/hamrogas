<?php 
include_once('connection.php');

if(isset($_GET['mask']))
{
	// echo "string";
	// exit();
	$delete_id = $_GET['mask'];

	$sql = mysqli_query($conn,"DELETE FROM product WHERE id = '$delete_id'");
	if($sql)
	{
		header('location: display_product.php');
	}
	else
	{
		echo mysqli_error($conn);
	}


}


 ?>