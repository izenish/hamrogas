
<?php include("include/header.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <script type="text/javascript">
   function map(id2){

              Swal.fire({
                  title: 'Are you sure?',
                  text: "you want to view map??",
                  icon: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, View map'
                }).then((result) => {
                  if (result.value) {     
                    window.location.href = "map.php "+"?value="+id2;    
                        
                  }
                 
                })

    }
        function delivered(id1){

              Swal.fire({
                  title: 'Are you sure?',
                  text: "you have delivered an item??",
                  icon: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, Delivered'
                }).then((result) => {
                  if (result.value) {     
                    window.location.href = "Delivered.php "+"?data="+id1;    
                        
                  }
                 
                })

    }
      
  </script>









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
    <li class="breadcrumb-item active" aria-current="page">Ordered list</li>
  </ol>
</nav>

   <div class="row justify-content-center " >
      <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">ordered</th>
            <th scope="col">Number</th>

            <th scope="col">Date</th>
            <th scope="col">Amount</th>


            <!-- <th scope="col">Price</th> -->
            <th scope="col">Location</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php 
      $sn=1;
     $sql = mysqli_query($conn,"SELECT * FROM customer");
    


     while($main_result = mysqli_fetch_assoc($sql))
     {  
   // echo "$value";
   
 
     ?>
          <tr>
            <th scope="row"><?php echo $sn++; ?></th>
            <td style="text-align: center;"><img style="width: 80px; border: 1px solid #eee;" src="../../../stripe_integration_php\files/<?= $main_result["profile"];?>" alt="Thumb"></td>
            <td><?php echo $main_result['first_name'];echo ' ';echo $main_result['last_name']; ?></td>

            <td><?php echo $main_result['email']; ?></td>
            <td><?php echo $main_result['item']; ?></td>

            <td><?php echo $main_result['quantity']; ?></td>

            <td><?php echo $main_result['created_at']; ?></td>
            <?php
             if( $main_result['payment']=="COD")
             {
               ?>

            <td><?php echo $main_result['amt']; 
            ?> </td>
            <?php
            }
            else{?>
              <td><p>Paid</p></td>

            <?php }
            ?>
            
            


                <td align="center"><a onclick="map(<?php   echo($main_result['customer_id']);?>);" style="cursor: pointer; color:#dd3e4e;"><i class="btn btn-primary" style="font-style: normal;">Location</i></a></td>  
                <td align="center"><a onclick="delivered(<?php echo($main_result['customer_id']);?>);" style="cursor: pointer; color:#dd3e4e;"><i class="btn btn-primary " style="font-style: normal;">InProgress</i></a>
                 </td>     
          </tr>
            <?php }
           ?>
        </tbody>
      </table>


    </div>


      </div>
  </div>
</div>



 <?= include("include/footer.php");?>







