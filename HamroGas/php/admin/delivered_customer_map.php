<?php include("include/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#background {
    position:absolute;
    width:100%;
    min-height:100%;
    top:150px;
    left:0px;
    z-index:-1;
}
	</style>
</head>
<body>

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
                    <a href="pending.php" >
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
    <li class="breadcrumb-item active" aria-current="page"><a href="list.php">Ordered list</a></li>
    <li class="breadcrumb-item active" aria-current="page">Map</li>
  </ol>
</nav>
	</div>
		<?php

require_once('connection.php');
    if (isset($_GET["value"]))
    {
    	$id = $_GET['value'];
    	// echo "$id";
    	$sql = mysqli_query($conn,"	SELECT * FROM delivered where C_id = '$id'");
    	$query = mysqli_fetch_assoc($sql);
    	$long = $query['longitude'];
    	$lati = $query['latitude'];
      echo "$long";
        ?>
 <div id="background">
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $lati; ?>,<?php echo $long; ?>&output=embed"></iframe></div>
 
        <?php
    }

?>

	</div>

</body>
</html>
