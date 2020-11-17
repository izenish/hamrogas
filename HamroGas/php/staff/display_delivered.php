<?php include("include/header.php"); ?>
 <?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'connection.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


    if(isset($_GET['data']))
{   
          $d = $_GET['data'];
    
         $sql1 = "SELECT * FROM customer WHERE customer_id = '$d'";
         $sql = mysqli_query($conn, $sql1);
        $rows = mysqli_fetch_assoc($sql);
         $email = $rows['email'];
         $id = $rows['customer_id'];
        $code = uniqid(True);

        // echo "$code";
        $sql = "INSERT into confirm(`c_id`,`email`,`code`) values ('$id' , '$email' , '$code')";
       $query =  mysqli_query($conn , $sql);
       if(!$query){
        exit("Error");
       }

        ?>
        <!-- <div style="visibility: hidden; display: none;"> -->
            <?php
        
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                       // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'hyongojumanish@gmail.com';                     // SMTP username
        $mail->Password   = 'manish_123';                               // SMTP password
        $mail->SMTPSecure = 'TSL';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('hyongojumanish@gmail.com', 'Gas_booking');
        $mail->addAddress("$email");     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('hyongojumanish@gmail.com', 'No rply');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/customer_confirm.php?code=$d";
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "CONFIRM IF YOU HAVE RECEIVED YOUR ORDER";
        // $mail->Body    ='<h1>Reset your password</h1><br>';
         $mail->Body = "<h2>CONFIRMATION LINK</h2><br><a href='$url'>Click here</a> For Confirmation";
        ?>
    <!--    </div> -->
        <?php


        $mail->send();
        echo "<script >alert('confirmation link has been sent to the customer.');
         window.location.herf ='list.php';</script>";
        
     } catch (Exception $e) {
        echo "Confirmation link cannot be send. Mailer Error: {$mail->ErrorInfo}";
    }
    // header("location:forget.php");
    
}?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
   </head>
<body>

  <div class="main_body"> 
    <div class="sidebar_menu">
          <div class="inner__sidebar_menu">

            <ul>
              <li>
                <a href="index.php">
                  <span class="icon">
                    <i class="fas fa-border-all"></i></span>
                  <span class="list">Dashboard</span>
                </a>
              </li>
                </li>
                <li>
                <a href="List.php">
                  <span class="icon"><i class="fas fa-comments"></i></span>
                  <span class="list">List</span>
                </a>
              </li>
              <li>
                <a href="charts.php">
                  <span class="icon"><i class="fas fa-chart-pie"></i></span>
                  <span class="list">Charts</span>
                </a>
            
            
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-address-card"></i></span>
                  <span class="list">About</span>
                </a>
              </li>
              
            
            </ul>

            <div class="hamburger">
              <div class="inner_hamburger">
                  <span class="arrow">
                      <i class="fas fa-long-arrow-alt-left"></i>
                      <i class="fas fa-long-arrow-alt-right"></i>
                  </span>
              </div>
          </div>

          </div>
      </div>
       <div class="container">

<nav aria-label="breadcrumb" style="margin-bottom: 25px;">
  <ol class="breadcrumb" style="background-color: #dce1e9;">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="list.php">Ordered list</a></li>
    <li class="breadcrumb-item active" aria-current="page">Delivered</li>
    
  </ol>
</nav>
    </div>


 