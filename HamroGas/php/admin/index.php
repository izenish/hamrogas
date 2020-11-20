  <?php
// echo $_COOKIE["member_login"];exit;
if(empty($_SESSION)) // if the session not yet started
   session_start();

if(!isset($_SESSION['username'])) { 
  echo "<script>window.location='../login/admin_signIn.php';</script>";
  exit;
}
?>


<?php
include("include/header.php");
?>

<style type="text/css">
    .night
    {
      background: url("images/star_night.jpg") !important;
      background-position: center!important;
      background-repeat: no-repeat!important;
      background-size: cover!important;
      color: #fff!important;
    }
       .day
    {
      background: url("images/day.jpg") !important;
      background-position: center!important;
      background-repeat: no-repeat!important;
      background-size: cover!important;
      color: #fff!important;
    }
       .morning
    {
      background: url("images/morning.jpg") !important;
      background-position: center!important;
      background-repeat: no-repeat!important;
      background-size: cover!important;
      color: #fff!important;
    }
       .evening
    {
      background: url("images/evening.jpg") !important;
      background-position: center!important;
      background-repeat: no-repeat!important;
      background-size: cover!important;
      color: #fff!important;
    }

    .item
    {
      position: relative;
      border-radius: 20px;
    }
    .divTime
    {
      position: absolute;
      right: 4%;
      top: 30%;
      color: #fff;
      font-size: 28px;
 /*     height: 30px;
      width: 30px;
      background-color: red;*/
    }


</style>


<!-- for different time background -->
<script type="text/javascript">
    function fxn()
    {
      var d = new Date();
       var m = d.getMinutes();
        var s = d.getSeconds();
      var hrs = d.getHours();
     
      var h= d.getHours();
        h =checkhrs(h);
       m = checkTime(m);
       s = checkTime(s);
      var element = document.getElementById('weather');
      var greet =  document.getElementById('greeting');
      
      if(hrs<12)
      {
      element.classList.add('morning');
      greet.innerHTML="Good morning working early in the morning??? Anyways,";
      }
      else if(hrs<17)
      {
      element.classList.add('day');
      greet.innerHTML="Good day to work dont forget to take break.. Anyways,";
      }
      else if (hrs<19) 
      {
      element.classList.add('evening');
      greet.innerHTML="Good evening, its nice seeing sunset... Anyways,";
      }
      else{
      element.classList.add('night');
      greet.innerHTML="Having a long work till night huh??? Anyways,";
      }

        document.getElementById('time').innerHTML =
        h + ":" + m + ":" + s;
        var t = setTimeout(fxn, 500);
    }

      function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
      }
      function checkhrs(i)
      {
       if(i>12)
        {
          i=i-12;
        }
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
        return i;
      }
  </script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Views'],
          
            <?php

              $conn = mysqli_connect("localhost","root","","notify"); 

          $sql1= "SELECT * FROM `view_stats`";
          $result1 = mysqli_query($conn,$sql1);
          $total = mysqli_num_rows($result1);
          $total = $total - 7;
          if($total<0){$total=0;}
  
          // $sql = "SELECT * FROM `view_stats` order by id desc LIMIT $total,7";
          $sql = "SELECT * FROM `view_stats` LIMIT $total,7";

              $result = mysqli_query($conn,$sql);

              if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result))
                {
              ?> 
                  ['<?= $row['date'];?>', <?= $row['page_views'];?> ],  

              <?php
                }
              }
            ?>  
          // ['2004',  1000,      400],
          // ['2005',  1170,      460],
          // ['2006',  660,       1120],
          // ['2007',  1030,      540]
          
        ]);

        var options = {

          title: 'Company Performance',
          pointSize: 10,
          // dataOpacity:0.5,
          colors: ['#1f975b'],
          curveType: 'function',
          legend: { position: 'bottom' },
          animation: {
            duration:1000,
            easing:'inAndOut',
            startup:true
          },
          chartArea: {
            left:'8%',
            width:'90%',
          },
        
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

  <div class="main_body" > 
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

        <div class="item_wrap">
          <div class="item" id="weather" style="margin: 0; width: 100%; padding: 30px;">
            <div id="w_icon"><i class="fas fa-cloud-moon" style="position: absolute; top: 10%; font-size: 46px;"></i></div>
            <div><p style="margin-left: 65px;"> <span id="greeting"></span></p></div>
            <div ><h1 style="font-weight: 400; ">Welcome to the Dashboard , <?=ucwords($_SESSION['username']);?></h1></div>
            <div class="divTime" id="time" style="font-weight: bold"></div>
          </div>
        </div>

        <div class="item_wrap">
          <div class="item1">
             <div class="part">
                
                <span><i class="fas fa-eye" style="font-size: 50px;"></i></span>
                <span>
                  <p style="margin-right: 30px; color: /*#0ebeff*/#1f975bc9; font-size: 18px;">VIEWS</p>
                  <?php 
                    $conn = mysqli_connect('localhost','root','','notify');

                    if(!$conn)
                    {
                      die("couldnot connect").mysqli_error($conn);
                    }

                    $sql = "SELECT * FROM `view_stats`";

                    $result = mysqli_query($conn,$sql);
                    $total =0;
                    if(mysqli_num_rows($result)>0)
                    {
                      while($row= mysqli_fetch_assoc($result))
                      {
                        $total = $total + $row['page_views'];
                      }
                       echo "<p style='margin-left:-30px; font-size:25px;'>".$total."</p>";
                    }
                     ?>
                </span>
                
             </div>

             <div class="part">
                <span><i class="fas fa-users" style="font-size: 50px;"></i></span>
                <span>
                  <p style="margin-right: 30px; color: #1f975bc9; font-size: 18px;">STAFF</p>
                  <?php 
                    $conn = mysqli_connect('localhost','root','','notify');

                    if(!$conn)
                    {
                      die("couldnot connect").mysqli_error($conn);
                    }

                    $sql = "SELECT * FROM `delivery_boy`";

                    $result = mysqli_query($conn,$sql);
                    $total =0;
                    if(mysqli_num_rows($result)>0)
                    {

                       echo "<p style='margin-left:-30px; font-size:25px;'>".mysqli_num_rows($result)."</p>";
                    }
                     ?>
                </span>
             </div>
          </div>

          <div class="item2" >
            <div class="part"> 
             <span><i class="fas fa-user-check" style="font-size: 50px;"></i></span>
                <span>
                  <p style="margin-right: 0px; color: #1f975bc9; font-size: 18px;">AVAILABLE STAFF</p>
                  <?php 
                    $conn = mysqli_connect('localhost','root','','notify');

                    if(!$conn)
                    {
                      die("couldnot connect").mysqli_error($conn);
                    }

                    $sql = "SELECT * FROM `delivery_boy` WHERE `status`=1";

                    $result = mysqli_query($conn,$sql);
                   
                     if(mysqli_num_rows($result)>0)
                    {

                       echo "<p style='margin-left:-30px; font-size:25px;'>".mysqli_num_rows($result)."</p>";
                    }
                     ?>
                </span>
            </div>
            <div class="part">
                <span><i class="fab fa-product-hunt" style="font-size: 50px;"></i></span>
                <span>
                  <p style="margin-right: 30px; color: #1f975bc9; font-size: 18px;">TOTAL SALES</p>
                  <?php 
                    $conn = mysqli_connect('localhost','root','','notify');

                    if(!$conn)
                    {
                      die("couldnot connect").mysqli_error($conn);
                    }

                    $sql = "SELECT SUM(QUANTITY) as total FROM `delivered`";

                    $result = mysqli_query($conn,$sql);
                    $total =0;
                    if(mysqli_num_rows($result)>0)
                    {
                      while($row= mysqli_fetch_assoc($result))
                      {
                        $total = $row['total'];
                      }
                       echo "<p style='margin-left:-30px; font-size:25px;'>".$total."</p>";
                    }
                     ?>
                </span>
            </div>
          </div>
        </div>


             <div class="item_wrap">
          <div class="item" style="margin: 0; width: 100%; padding: 1px; height: 50vh;">
                   <div id="curve_chart" style="height:100%; width:100%;"></div>
          </div>
        </div>


      </div>
  </div>
</div>
  
<?= include("include/footer.php");?>



