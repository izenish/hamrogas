<?php 
ob_start();
include "include/dbconnect.php";
?>

<div class="row mt-5">
      <?php 
    
        $sql="select * from gas_cylinders order by gas_id ASC";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
          while($row=mysqli_fetch_assoc($res))
          {               
        ?>
        

        <div class="col-md-3">
        
          <div class="card card-body " style="height:80% !important">
          
            <img
              class="card-img-top img-fluid"
              src="images/products/<?= $row['featured_image'];?>"
            />
            <div class="card-title">
              <h4><?php echo $row['title']?></h4>
            </div>
            <div class="card-text">
             <?php echo $row['content']?>
              <br /><br />
              <h4 class="card-title">Rs.<?php echo $row['exc_price']?><font style="font-family: 'Maven Pro', sans-serif;font-size:10px;">/ Exchange cylinder</font></h5>
              <h6 class="card-title">Rs.<?php echo $row['new_price']?><font style="font-family: 'Maven Pro', sans-serif;font-size:10px;">/ NEW cylinder</font></h4>
              <?php 
              if($row['stock']>10)
              { ?>
              <a class="btn btn-success text-light" href="stripe_integration_php/checkout.php"> Buy Now</a> &nbsp;
            
          <?php }
          ?>
          <?php if($row['stock']<10&&$row['stock']>0)
              { $e=$row['gas_id'];
                $f=$row['title'];

                ?>
                
              <a class="btn btn-warning text-light" href="stripe_integration_php/checkout.php?id=<?= $e ?> && gas=<?= $f ?> " > Limited Stock! Buy Now </a> &nbsp;
              <?php 
              }
              ?>
              <?php if($row['stock']<=0)
              { ?>
              <a class="btn btn-danger text-light"> Out Of Stock</a> &nbsp;
              <?php 
              }
              ?>    
              
              <br /><br />
            </div>
          </div>
        </div>
        <?php 
          }
        }

        ?>          
      </div>
    </div>

