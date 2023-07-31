<?php
   include('common/db.php');
   include('pagination/function.php');
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
<div class="container-fluid mt-3">
   <div class="row">
      <div class="col-2">
         <div class="card rounded border-0 p-3">
            <h4 class="text-secondary">Mens</h4>
            <div class="list-group list-group-flush">
               <a class="list-group-item list-group-item-action" href="men_cshirt.php"> Casual Shirt</a>
               <a class="list-group-item list-group-item-action" href="men_tshirt.php"> T-Shirt</a>
               <a class="list-group-item list-group-item-action" href="men_jeans.php"> Jeans</a>
               <a class="list-group-item list-group-item-action" href="men_trouser.php"> Trousers</a>
            </div>
            <h4 class="text-secondary">Womens</h4>
            <ul class="list-group list-group-flush">
               <a class="list-group-item list-group-item-action" href="salwar.php"> Salwar</a>
               <a class="list-group-item list-group-item-action" href="saaree.php"> Saaree</a>
               <a class="list-group-item list-group-item-action" href="jtop.php"> Jeans & Top</a>
            </ul>
            <h4 class="text-secondary">Kids</h4>
            <ul class="list-group list-group-flush">
               <a class="list-group-item list-group-item-action" href="kids.php"> Cloths</a>	
            </ul>
         </div>
      </div>
      <div class="col-10">
         <div class="card p-3 rounded border-0" >
         <h3 class="text-secondary text-center">Search Results for <?php echo $_GET["search"]; ?></h3>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
               <?php
               $query = $_GET["search"];
               include('pagination/functionSearch.php');
               if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                  ?>
               <div class="col mb-5">
                  <div class="card h-100">
                     <!-- Product image-->
                     <img class="card-img-top" src="./admin/<?php echo $row["P_Image"]; ?>" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder"><?php echo $row["Name"]; ?></h5>
                           <!-- Product price-->
                           LKR <?php echo $row["Price"]; ?>
                        </div>
                     </div>
                     <!-- Product actions-->
                     <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-danger rounded btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>">Buy Now</a>
                           <a class="btn btn-warning btn-sm" href="product_details.php?id=<?php echo $row["id"]; ?>">View Details</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php }}else
	{
		echo "<p class='text center p-3'>No result Found</p>";
	}?>
            </div>
            <div style='padding: 10px 20px 0px 0; border-top: dotted 1px #CCC;'>
               <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
            </div>
            <ul class="pagination mt-2">
               <?php include('pagination/pagination.php'); ?>
            </ul>
         </div>
      </div>
   </div>
</div>
