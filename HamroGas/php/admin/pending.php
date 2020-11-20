
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
                    window.location.href = "pending_customer_map.php "+"?value="+id2;    
                        
                  }
                 
                })

    }

        function confirm(id1){

              Swal.fire({
                  title: 'Are you sure?',
                  text: "Do you sure want to go to Delete this Order??",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, Delete now'
                }).then((result) => {
                  if (result.value) {     
                    Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        ) .then((result) => {
                                if (result.value) {
                                 // 
                                 window.location.href = "delete/delete_pending.php"+"?mask="+id1;
                                }
                                 // 
                                })    
                        
                  }
                 
                })

    }
      
  </script>


  <div class="main_body"> 
  <div class="sidebar_menu">
          <div class="inner__sidebar_menu">

            <ul>
              <li >
                <a href="index.php" style="background: #5343c7; color: #fff;">
                  <span class="icon">
                    <i class="fas fa-border-all"></i></span>
                  <span class="list">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="charts.php">
                  <span class="icon"><i class="fas fa-chart-pie"></i></span>
                  <span class="list">Charts</span>
                </a>
              </li>
                             <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="far fa-comments"></i></span>
                    <span class="list">List</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>
               <div class="dropdown-container" >
                     <a href="list.php">
                      <span class="icon"><i class="fas fa-users"></i></span>     
                      <span class="list">UnDelivered list</span>
                    </a>
                    <a href="pending.php" style="background: #5343c7; color: #fff;">
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Unverified List</span>
                      </a>
                      <a href="Delivered_list.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Delivered List</span>
                      </a>
                  </div>
                     <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="fab fa-product-hunt"></i></span>
                    <span class="list">Product</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" >
                     <a href="product.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add</span>
                    </a>
                      <a href="Stock.php" >
                        <span class="icon"><i class="far fa-comments"></i></span> 
                        <span class="list">Stock</span>
                      </a>
                  </div>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-address-book"></i></span>
                  <span class="list">Contact</span>
                </a>
              </li>
               <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="fas fa-truck-loading"></i></span>
                    <span class="list">Admin</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" >
                     <a href="add_admin.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add</span>
                    </a>
                 
                      <a href="admin_list.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Manage</span>
                      </a>
                  </div>
              </li>
              <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="fas fa-truck-loading"></i></span>
                    <span class="list">Delivery staff</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" >
                     <a href="add_deliveryStaff.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add</span>
                    </a>
                      <a href="add_admin.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add_admin</span>
                    </a>
                      <a href="manage_deliveryStaff.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Manage</span>
                      </a>
                  </div>
              </li>

                   <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="far fa-comments"></i></span>
                    <span class="list">Message</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" >
                     <a href="displayMessage.php">
                      <span class="icon"><i class="far fa-comments"></i></span>     
                      <span class="list">All messages</span>
                    </a>
                      <a href="unseenmsg.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Unseen Messages</span>
                      </a>
                  </div>
              </li>
              <li>
                <a href="about.php">
                  <span class="icon"><i class="fas fa-address-card"></i></span>
                  <span class="list">About</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fab fa-blogger"></i></span>
                  <span class="list">Blogs</span>
                </a>
              </li>
              <li>
                <a href="map.php">
                  <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
                  <span class="list">Maps</span>
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
            <th scope="col">Customer Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Contact </th>
            <th scope="col">ordered</th>
            <th scope="col">Number</th>
            <th scope="col">Payment</th>
             <th scope="col">Purpose</th>
            <!-- <th scope="col">Price</th> -->
            <th scope="col">Location</th>
            <th scope="col">Order Date</th>
             <th scope="col">Delivered Date</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          <?php 
      $sn=1;
     $sql = mysqli_query($conn,"SELECT * FROM pending");
    


     while($main_result = mysqli_fetch_assoc($sql))
     {  
   // echo "$value";
   
 
     ?>
          <tr>
            <th scope="main_result"><?php echo $sn++; ?></th>
            <td><?php echo $main_result['customer_id'];?></td>
            <td style="text-align: center;"><img style="width: 80px; border: 1px solid #eee;" src="../../../stripe_integration_php\files/<?= $main_result['profile'];?>" alt="Thumb"></td>
            <td><?php echo $main_result['name'];?></td>
            <td><?php echo $main_result['email']; ?></td>
              <td><?php echo $main_result['address']; ?></td>
                <td><?php echo $main_result['phone_number']; ?></td>
            <td><?php echo $main_result['item']; ?></td>
            <td><?php echo $main_result['quantity']; ?></td>
            <td><?php echo $main_result['payment']; ?></td>
            <td><?php echo $main_result['purpose']; ?></td>
            
           
                      <!-- <td><?php// echo $main_result['item_price']; ?></td> -->
            
         <!--    <td><a href="delete.php?id=<?php// echo($main_result['id']);?>" class="text-danger"><i
                  class="fas fa-trash-alt"></i></a></td> -->
                <td align="center"><a onclick="map(<?php   echo($main_result['customer_id']);?>);" style="cursor: pointer; color:#dd3e4e;"><i class="btn btn-primary" style="font-style: normal;">Location</i></a></td>  
                <td><?php echo $main_result['order_date']; ?></td>
                <td><?php echo $main_result['Delivered_date']; ?></td>
                   
                 <td align="center"><a onclick="confirm(<?php echo($main_result['customer_id']);?>);" style="cursor: pointer; color:#dd3e4e;"><i class="fas fa-trash-alt"></i></a></td> 

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







