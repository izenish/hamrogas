
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


if (isset($_POST['email'])) {

        $email = $_POST['email'];
        $code = uniqid(true);
        // echo "$code";
        $sql = "INSERT into reset( `email`,`code`) values ('$email' , '$code')";
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
        $mail->Username   = 'hamrogas.nepal@gmail.com';                     // SMTP username
        $mail->Password   = 'hamrogasHAMRAIMATRA';                               // SMTP password
        $mail->SMTPSecure = 'TSL';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('hamrogas.nepal@gmail.com', 'Gas_booking');
        $mail->addAddress("$email");     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('hamrogas.nepal@gmail.com', 'No rply');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/update_password.php?code=$code";
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Reset Password";
        // $mail->Body    ='<h1>Reset your password</h1><br>';
         $mail->Body = "<h2>RESET PASSWORD</h2><br><a href='$url'>Click here</a> to reset your password.";
        ?>
    <!--    </div> -->
        <?php


        $mail->send();
        echo "<script >alert('Reset link has been sent to your email.'); window.location.herf='admin_signIn.php';</script>";
        
     } catch (Exception $e) {
        echo "Reset link couldnt sent to your email. Mailer Error: {$mail->ErrorInfo}";
    }
    // header("location:forget.php");
    
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form</title>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet"> -->

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
            <form  method="POST" style="width: 400px !important;" name="email">
                <img src="img/recover.png">
                <h2 class="title" style="text-transform: none; margin: 0">Recover Password</h2>
                <p style="margin: 0px 0px 30px 0px;">Add e-mail to send link to reset your password</p>
              
                <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Email</h5>
                    <input type="text" class="input" required="" name="email">
                 </div>
              </div>
               
                <input type="submit" name="sumbit" value="Reset" class="btn">
              <a href="admin_signIn.php" id="signupnow">Back to login</a>
            </form>
        </div>
    </div>
  
    
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>