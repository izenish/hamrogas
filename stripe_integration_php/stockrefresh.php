
<?php
  // echo "Nepal";exit();
  ob_start();
require_once("DBConnect.php");

// $sql = "SELECT purpose FROM `item` WHERE 1 Limit 0, 10";
// $result = mysqli_query($conn, $sql);
// $data = mysqli_num_rows($result);
//   echo "<pre>"; print_r($result); 

// $data = mysqli_num_rows($result1);
//   echo "<pre>"; print_r($result1);
// $sql2 = "SELECT type FROM `item` WHERE 1 Limit 0, 10";
// $result2 = mysqli_query($conn, $sql2);
  //$data = mysqli_num_rows($result);
  //echo "<pre>"; print_r($result); exit();
?>

    <?php
    $sql1 = "SELECT title FROM `gas_cylinders` WHERE stock>='5'";
    $result1 = mysqli_query($conn, $sql1);
    ?>
            <label for="item">Item</label>
            <select class="custom-select-sm  form-control form-control-sm" name="item" required="">
              <?php
              if (mysqli_num_rows($result1) > 0) {
          // output data of each row
          //$user_list = mysqli_fetch_assoc($result);
          // echo "<pre>"; print_r($user_list);exit;

                while($row = mysqli_fetch_assoc($result1)) {
              // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
                  ?>
                  <option value="">
                   <?= $row["title"];?>
                 </option>

                 <?php
               }   
             } else {
              ?>
              <tr>
                <td colspan="3">No Record(s) found.</td>
              </tr>
              <?php
            }
            ?>
            <?php 
            mysqli_close($conn);
            ?>

          </select>

        