   <?php include('connection.php');  ?>
    <?php 
  if (isset($_GET["value"]))
    {
      $id5 = $_GET['value'];
      // echo "$id";
      $sql = mysqli_query($conn," SELECT * FROM customer where customer_id = '$id5'");
      $rows = mysqli_fetch_assoc($sql);
  $id = $rows['customer_id'];
  // echo "$id";
  $email = $rows['email'];
  // echo "$email";
  $name = $rows['first_name'];
  // echo "$name"; 
  $address = $rows['address'];
  $phone = $rows['phone_number'];
  $item= $rows['item'];
  $payment = $rows['payment'];
  $purpose = $rows['purpose'];
  $quantity  = $rows['quantity'];
  $profile = $rows['profile'];
  
  $long = $rows['longitude'];
  // echo "$long";
  $lati = $rows['latitude'];
  // echo "$lati";

  $o_date = $rows['created_at'];
}
  $sql = "INSERT INTO `pending`(`customer_id`,`name`,`email`,`address`,`phone_number`,`item`,`payment`,`purpose`,`quantity`,`profile`,`longitude`,`latitude`,`order_date`) VALUES('$id','$name','$email','$address','$phone','$item','$payment','$purpose','$quantity','$profile','$long','$lati','$o_date')";
  // echo "$sql";

    $result = mysqli_query($conn,$sql);
   if(!$result){
        exit("Error");
       }
       echo "$id5";
  $value = "DELETE  FROM `customer` WHERE `customer_id` = '$id5'";
  echo "$value";
  $sql2 =mysqli_query($conn,$value);
  if(!$sql2){
        exit("Error");
       }



header("Location:list.php");?>