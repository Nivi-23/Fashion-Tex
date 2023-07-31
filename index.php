<?php
include('common/db.php');
session_start(); 
include('header.php');
?>
<style>
     .card-img-top
  {
      width: 100%;
      height: 20vw;
      object-fit: fill;
  }
    </style>
      <img src="assets/images/banner.jpg" class="img-fluid mt-1" alt="Responsive image">
      <div class="container-fluid mt-4">
         <div class="row m-4">
            <div class="col-md-12 bg-white rounded shadow">
               <h3 class="pl-3 pt-3">Latest Cloths</h3>
               <div class="card-deck p-3">
               <?php
						$res=mysqli_query($con,"select * from products ORDER BY id DESC LIMIT 5");
while($row=mysqli_fetch_array($res))
{
?>
                  <div class="card">
                     <img src="./admin/<?php echo $row["P_Image"]; ?>" alt=""  class="card-img-top" alt="...">
                     <div class="card-body">
                        <h7 class="card-title text-truncate"><?php echo $row["Name"]; ?></h7>
                        <div class="card-text mb-1">LKR <?php echo $row["Price"]; ?></div>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-danger rounded btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>">Buy Now</a>
									<a class="btn btn-warning btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>">View Details</a>
                        </div>
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-md-12 bg-white rounded shadow">
               <h3 class="pl-3 pt-3">Mens Cloths</h3>
               <div class="card-deck p-3">
                  <?php
               $res=mysqli_query($con,"select * from products where category='Mens Cloths' ORDER BY id DESC LIMIT 5");
               while($row=mysqli_fetch_array($res))
{
?>
                  <div class="card">
                     <img src="./admin/<?php echo $row["P_Image"]; ?>" alt=""  class="card-img-top" alt="..." />
                     <div class="card-body">
                        <h7 class="card-title text-truncate"><?php echo $row["Name"]; ?></h7>
                        <div class="card-text mb-1">LKR <?php echo $row["Price"]; ?></div>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-danger btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>" >Buy Now</a>
									<a class="btn btn-warning btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>" >View Details</a>
                        </div>
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-md-12 bg-white rounded shadow">
               <h3 class="pl-3 pt-3">Womens Cloths</h3>
               <div class="card-deck p-3">
               <?php
               $res=mysqli_query($con,"select * from products where category='Womens Cloths' ORDER BY id DESC LIMIT 5");
               while($row=mysqli_fetch_array($res))
{
?>
                  <div class="card">
                     <img src="./admin/<?php echo $row["P_Image"]; ?>" alt=""  class="card-img-top" alt="..." />
                     <div class="card-body">
                        <h7 class="card-title text-truncate"><?php echo $row["Name"]; ?></h7>
                        <div class="card-text mb-1">LKR <?php echo $row["Price"]; ?></div>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-danger btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>" >Buy Now</a>
									<a class="btn btn-warning btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>" >View Details</a>
                        </div>
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-md-12 bg-white rounded shadow">
               <h3 class="pl-3 pt-3">Kids Cloths</h3>
               <div class="card-deck p-3">
               <?php
               $res=mysqli_query($con,"select * from products where category='Kids Cloths' ORDER BY id DESC LIMIT 5");
               while($row=mysqli_fetch_array($res))
{
?>
                  <div class="card">
                     <img src="./admin/<?php echo $row["P_Image"]; ?>" alt=""  class="card-img-top" alt="..."/>
                     <div class="card-body">
                        <h7 class="card-title text-truncate"><?php echo $row["Name"]; ?></h7>
                        <div class="card-text mb-1">LKR <?php echo $row["Price"]; ?></div>
                        <div class="mb-1 text-truncate">Description</div>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-danger btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>" >Buy Now</a>
									<a class="btn btn-warning btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>" >View Details</a>
                        </div>
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
         </div>
      </div>
      <?php include('footer.php'); ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   </body>
</html>