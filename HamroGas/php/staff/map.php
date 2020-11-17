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
    	$sql = mysqli_query($conn,"	SELECT * FROM customer where customer_id = '$id'");
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
