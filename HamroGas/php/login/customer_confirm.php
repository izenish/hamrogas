
<!DOCTYPE html>
<html>
<head>
    <title>confirm</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>


 <script type="text/javascript">
  
        function delivered(id1){

          swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal(<?php
        if(!isset($_GET["code"]))
{
    exit("ERROR");
}
$code = $_GET["code"];
$sql = "SELECT * FROM `confirm` WHERE code ='$code'";

$result = mysqli_query($conn,$sql);
$rows= mysqli_fetch_assoc($result);
        $email = $rows['email'];
        

$id = $rows['c_id'];         
$sql2 =mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = '$id'");
$result = mysqli_fetch_assoc($sql2);
$i = $rows['customer_id'];
$name = $rows['first_name'];
$email = $rows['email'];
$date = $rows['created_at'];
$address = $rows['address'];
$p = $rows['phone_number'];
$i = $rows['item'];
$purpose = $rows['purpose'];
$q = $rows['quantity'];
$pr = $rows['profile'];

$query = "INSERT INTO delivered (`C_id`,`name`,`email`,`address`,`contact`, `item`,`quantity`,`purpose`,`date`,`Delivered_date`,`profile`) values ('$i','$name','$email','$address','$p','$i','$q','$purpose','$date','$pr')";
    $query1 = mysql_query($conn,$query);
     if(!$query1){
        exit("Error");
       }
       $sql3 = "DELETE FROM customer where customer_id = $id";
      $query3 = mysqli_query('$conn','$sql3');
       if(!$query3){echo "Error Deleting Data";exit();
    }else{
        echo "<script>alert('Thank you!!');</script>";}
        ?>




);
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});

    }
      
  </script>

</body>
</html>
