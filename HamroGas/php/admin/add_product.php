
<?php  
include('connection.php'); 
  $msg = "";
  $msg_class = "";
  $msg1="";
  // $conn = mysqli_connect("localhost", "root", "", "notify");

 if($conn)
 {
  // echo "<br><br><br>string<br>";
  // exit();
 }

  if (isset($_POST['product'])) {
      
      $item= strtoupper($_POST['item']);
      // echo "item";
      $price = $_POST['price'];
      $np = $_POST['new_price'];
      $name=$_POST['full-name'];
      $e = $_POST['email'];
      $q = $_POST['Quantity'];
      $content = $_POST['content'];
      //     echo "<br><br><br>string<br>";
  // exit();
      
        
      
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    $temp = explode('.',$_FILES['profileImage']['name']);
     $file_ext=strtolower(end($temp));
    
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
        $msg = "Image Extension should be either jpg or png";
        $msg_class = "alert-danger";

      }

    // For image upload
    $target_dir = "../../../images/products/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 2097152) {
      $msg = "Image size should not be greated than 2mb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // echo "string";
    // exit();

    // Upload image only if no errors
    if (empty($msg)) {       
        
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {

        // $conn = mysqli_connect("localhost", "root", "", "notify");
          
             // $sql2 = "INSERT INTO `gas_cylinders` (`featured_image`,`title`,`content`,`exc_price`,`new_price`,`stock`,`purpose`,`type`,`user_name`,`email`) VALUES ('$profileImageName','$item','$content','$price','$n','$q','$purpose','$type','$name','$e')";
             // echo "$sql2";
             // exit();

// echo "<br><br >".$profileImageName;
// echo "<pre>";print_r($_FILES['profileImage']);exit;
             // mysqli_query($conn,$sql2);

             $sql3 = "SELECT * From gas_cylinders where title = '$item'";
             // echo "$sql3";
             $result5 = mysqli_query($conn,$sql3);
             // echo "$sql3";
             
              if (mysqli_num_rows($result5)>0) {

              $rows = mysqli_fetch_assoc($result5);              
              
             $T_stock = $rows['stock'];
             // echo "$T_stock";
             // exit();
             
             $totalstock = $q + $T_stock;
             // echo "$totalstock";
              // exit();

   $sql2 ="UPDATE gas_cylinders SET new_price = '$np',exc_price ='$price',stock = '$totalstock' where title = '$item' "; 
    // echo "$sql2";
   
   $row = mysqli_query($conn, $sql2);

        if($row){
          $msg = "Image uploaded and saved in the Database update";
          $msg_class = "alert-success";
        } 
        else {
          echo "<br><br>";
          die("Connection failed: " . mysqli_error($conn));
          $msg1 = "unable to connect database";
          $msg_class = "alert-danger";
        }
      

 } 
 else {
        $sql2 = "INSERT INTO gas_cylinders(`featured_image`,`title`,`content`,`new_price`,`exc_price`,`stock`) values ('$profileImageName','$item','$content','$np','$price','$q')";

        if(mysqli_query($conn, $sql2)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
          // mysqli_close();
        } else {
          echo "<br><br>";
          // die("Connection failed: " . mysqli_error($conn));
          $msg1 = "unable to connect database";
          $msg_class = "alert-danger";
        }
      } 
        $sql = "INSERT INTO product (`image`,`Name`,`user_name`,`email`,`Content`,`new_Price`,`exc_price`,`stock`) VALUES ('$profileImageName','$item','$name','$e','$content','$np','$price','$q')";

             $value5 = mysqli_query($conn,$sql);
          if($value5) {
          echo "<br><br>";
          // die("Connection failed: " . mysqli_error($conn));
           $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
          
    }  



   else {
        $error = "There was an error uploading the file";
        // $msg = "alert-danger";
      }
    }
  }
 // $msg_class = "alert-danger";
        }

 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hamro Gas</title>

    <!-- favIcon -->
    <link rel="shortcut icon" href="../../images/favicon/burn.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>

</head>
<body onload="#myModal">
  <?php
 $sql = "SELECT purpose FROM `item` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
$sql1 = "SELECT gas_name FROM `item` WHERE 1 Limit 0, 10";
$result1 = mysqli_query($conn, $sql1);
$sql2 = "SELECT type FROM `item` WHERE 1 Limit 0, 10";
$result2 = mysqli_query($conn, $sql2);
  ?>


  <!-- Button to Open the Modal -->

  <!-- The Modal -->
  <div class="modal" id="myModal">
     <div class="modal-dialog"> 
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" class="text-center">Add product</h4>
          <button  type="button"   class="close"><a href="product.php">&times;</a></button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                    
  <form method="POST" action="" enctype="multipart/form-data">
    <div class="row" >
             <div class="col-25" >
                   <div class="ImageUpload">
                    <span class="img-div">
                      <div class="img-placeholder text-center"  onclick="triggerClick();">
                        <h4>Update Image</h4>
                      </div>
                      <img src="images/avatar.png" id="profileDisplay"> 
                    </span>
                   <input type="file" name="profileImage" style="display: none;" id="profileImage" onchange="displayImage(this);"> 
                   </div>
              </div>

              <div class="col-75">
                     <?php if (!empty($msg) || !empty($msg1)): ?>
                          <div class="alert <?php echo $msg_class ?>" role="alert">
                            <?php echo $msg; 
                              echo $msg1;
                              ?>
                          </div>
                        <?php endif; ?>
                                      
                    <div class="row" style="padding-left: 20px;">
                       <div class="col-50">
                        <label for="Product"><i class="fa fa-user"></i>Product Name</label>
                      <input type="text" name="item" placeholder="Enter product name">
                        <label for="full-name"><i class="fa fa-user"></i>User Name</label>
                        <input type="text" name="full-name" placeholder=" Name">
                         

                        <label for="Quantity">Quantity</label>
                       <input type="number"name="Quantity" placeholder="Quantity" min="0" step="1" maxlength="5" max="9999" />
                       <label for="content">Content</label>
                       <textarea type = "text" name="content" placeholder="Content"></textarea>
                        
                        
                        </div>
                      <div class="col-50">
                        <label for="Price">Price</label>
                       <input type="number"name="price" placeholder="Price" min="0" step="1" maxlength="5" max="9999" />
                        <label for="new_Price">new_Price</label>
                       <input type="number"name="new_price" placeholder="new_Price" min="0" step="1" maxlength="5" max="9999" />
                       <label for="email" ><i class="fa fa-envelope"></i>Email</label>
                        <input type="email" name="email" placeholder=" .......@gmail.com" required="">
                       
                                            </div>
                       

                        
                        
                     </div>   

                    
              </div>    

    </div>
  
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" name="product">Add</button>
        </div>
        </form>
        
      </div>
    </div>
   </div> 
  
</body>
</html>
    <script type="text/javascript">
    function triggerClick(e)
    {
      document.querySelector('#profileImage').click();
    }
    function displayImage(e){
      if(e.files[0])
      {
        var reader = new FileReader();
        reader.onload = function (e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }  
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>
