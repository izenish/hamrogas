
?>
<?php
require('connection.php');
if(!isset($_GET["code"]))
{
	exit("ERROR");
}
$code = $_GET["code"];
$sql = "SELECT * FROM `Reset` WHERE code ='$code'";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0)
{
	$rows= mysqli_fetch_assoc($result);
		$email = $rows['Email'];
	
}
else{
	echo "Please Enter Valid Email";
	exit();
}
if(isset($_POST["password"]))
{
		if($_POST["password"] == $_POST["c_password"])
		{
	$password = md5($_POST["password"]);
	$sql="UPDATE `delivery_boy` SET Password = '$password' where email = '$email'";
	$query = mysqli_query($conn,$sql);
	echo "Table has been updated";
	
	if(!$query)
	{
		echo "fail to update password";
	} 
	else{
		$sql1 = "DELETE FROM `Reset` where email = '$email'";
		$query1 = mysqli_query($conn,$sql1);
		// print_r("$query1");
		if(!$query1){echo "Error Deleting Data";exit();
	}else{
		echo "password updated successfully";}
	
	}
	exit();
}
else{
	echo "Please enter the valid password";
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/signup.css">


</head>
<body>
    
   <img class="wave1" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/forgot-password.svg">
        </div>
        <div class="login-content">
            <form  style="width: 400px !important;" method="POST">
                <img src="img/recover.png">
                <h2 class="title" style="text-transform: none; margin: 0">Recover Password</h2>
                <p style="margin: 0px 0px 30px 0px;">Add New Password</p>
              
                <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>New password</h5>
                    <input type="input" class="input" required="" name="password">
                 </div>
                   <div class="div">
                    <h5>confirm password</h5>
                    <input type="input" class="input" required="" name="c_password">
                 </div>
              </div>
               
                <input type="submit" class="btn" value="Reset" name="submit">
              <a href="signin.php" id="signupnow">Back to login</a>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>