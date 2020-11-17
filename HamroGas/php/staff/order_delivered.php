<?php  include('connection.php') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
  function call(){

              Swal.fire({
                  title:"confirmation.",
                  text: "Thank You",
                  icon: 'success',
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'Ok'
                }).then((result) => {
                  if (result.value) {     
                    window.location.href = "https://gmail.com/";    
                        
                  }
                 
                })

    }
      
  </script>

<?php
if(isset($_GET["value"]))
{
	$id = $_GET['value'];

	$sql= "SELECT * FROM pending where `customer_id` = '$id'";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);
	$id1 = $row['customer_id'];
	$name = $row['name'];
	$email = $row['email'];
	$address = $row['address'];
	$phone = $row['phone_number'];
	$item = $row['item'];
	$payment = $row['payment'];
	$purpose = $row['purpose'];
	$quantity = $row['quantity'];
	$o_date = $row['order_date'];
	$d_date = $row['Delivered_date'];
	$profile = $row['profile'];
	$long = $row['longitude'];
	$lati = $row['latitude'];
	
}

	$sql2 = mysqli_query($conn,"INSERT INTO `delivered`(`C_id`,`name`,`email`,`address`,`contact`,`item`,`payment`,`quantity`,`purpose`,`date`,`Delivered_date`,`profile`,`longitude`,`latitude`) values ('$id1','$name','$email','$address','$phone','$item','$payment','$quantity','$purpose','$o_date','$d_date','$profile','$long','$lati')");
	if(!$sql2)
	{
		exit("error");
	}


	$sql3 =mysqli_query($conn,"DELETE FROM pending where `customer_id` = '$id'");
	if(!$sql3)
	{
		exit("error");
	}
?>
<!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body onload ="call()">
    
    </body>
    </html>




