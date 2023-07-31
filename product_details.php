<?php
include('common/db.php');
session_start(); 
$id=$_GET["id"];
include('header.php');
?>
<!-- Product section-->        <form method="post" action="cart.php">
<?php
					$res=mysqli_query($con,"select * from products where id='$id'");
					while($row=mysqli_fetch_array($res))
					{
					?>
<section>
    <div class="container px-4 my-5">
        <div class="row gx-4 gx-lg-5">

            <div class="col-md-6">
                <img class="card-img-top" src="./admin/<?php echo $row["P_Image"]; ?>" alt="..."/></div>
            <div class="col-md-6">
                <h2><?php echo $row["Name"]; ?></h2>
                <p class="mb-1 small">
                    SKU:<?php echo $row["id"]; ?>
                </p>
                <p class="mb-2">
                    <h4 class="text-warning">
                        LKR <?php echo $row["Price"]; ?>
                    </h4>
                    </p>
                <p class="lead text-justify"><?php echo $row["Description"]?></p>
                <div class="form-group">
                    <label class="small">Size: </label>
                    <select class="form-control form-control-sm col-3" name="size">
                        <option value="s">Small</option>
                        <option value="xs">X Small</option>
                        <option value="m">Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">X Large</option>
                        <option value="xxl">XX Large</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="small">Color: </label>
                    <select class="form-control form-control-sm col-3" name="size">
                        <option value="black">Black</option>
                        <option value="m">Orange</option>
                        <option value="m">Pink</option>
                        <option value="m">Maroon</option>
                        <option value="m">Green</option>
                        <option value="l">Light Pink</option>
                        <option value="xl">Light Yello</option>
                    </select>
                </div>
                
                        <input type="hidden" name="hidden_image" value="<?php echo $row["P_Image"]; ?>" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
						<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
						
                <div class="form-group">
                    <label class="small">Quantity: </label>
                    <input class="form-control text-center form-control-sm" name="quantity"  id="quantity" max="<?php echo $row["Qty"]; ?>" type="number" value="1" style="max-width: 3rem" />
                </div>
                <div class="justify-content-between pl-0 col-8">
                    <button class="btn btn-danger rounded" type="button" name="addToCart">
                        Buy now
                    </button>
                    <button class="btn btn-warning rounded" type="submit" name="add_to_cart">
                        Add to cart
                    </button>
                </div>
                
            </div>
                    
        </div>
    </div>
</section>
</form>
<?php
					
                }
                ?>
<?php include('footer.php'); ?>
