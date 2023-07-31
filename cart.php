<?php
include('common/db.php');
session_start(); 
include('header.php');


$message = '';
echo $message = '';
if(isset($_POST["add_to_cart"]))
{
	if(isset($_COOKIE["shopping_cart"]))
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);

		$cart_data = json_decode($cookie_data, true);
	}
	else
	{
		$cart_data = array();
	}

	$item_id_list = array_column($cart_data, 'id');

	if(in_array($_POST["hidden_id"], $item_id_list))
	{
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]["id"] == $_POST["hidden_id"])
			{
				$cart_data[$keys]["Qty"] = $cart_data[$keys]["Qty"] + $_POST["quantity"];
			}
		}
	}
	else
	{
		$item_array = array(
            'P_Image' =>           $_POST["hidden_image"],
			'id'			=>	$_POST["hidden_id"],
			'Name'			=>	$_POST["hidden_name"],
			'Price'		=>	$_POST["hidden_price"],
			'Qty'		=>	$_POST["quantity"]
		);
		$cart_data[] = $item_array;
	}

	
	$item_data = json_encode($cart_data);
	setcookie('shopping_cart', $item_data, time() + (86400 * 30));
	header("location:cart.php?success=1");
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]['id'] == $_GET["id"])
			{
				unset($cart_data[$keys]);
				$item_data = json_encode($cart_data);
				setcookie("shopping_cart", $item_data, time() + (86400 * 30));
				header("location:cart.php?remove=1");
			}
		}
	}
	if($_GET["action"] == "clear")
	{
		setcookie("shopping_cart", "", time() - 3600);
		header("location:cart.php?clearall=1");
	}
}

if(isset($_GET["success"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  	Item Added into Cart
	</div>
	';
}

if(isset($_GET["remove"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Item removed from Cart
	</div>
	';
}
if(isset($_GET["clearall"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Your Shopping Cart has been clear...
	</div>
	';
}


?>

<div  class="container" id="shopping-cart">
<h3 class="text-secondary mt-4">Shopping Cart</h3>
<div class="container mt-2">			
			<div class="table-responsive mt-4">
			<table class="table table-stripped table-hover">
				<tr>					
                    <th width="10%">Image</th>
                    <th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
			<?php
			if(isset($_COOKIE["shopping_cart"]))
			{
				$total = 0;
				$cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach($cart_data as $keys => $values)
				{
			?>
				<tr>
                <td><img src="./admin/<?php echo $values["P_Image"]; ?>" width=100 height=100></td>
					<td><?php echo $values["Name"]; ?> </td>
					<td><?php echo $values["Qty"]; ?></td>
					<td>$ <?php echo $values["Price"]; ?></td>
					<td>$ <?php echo number_format($values["Qty"] * $values["Price"], 2);?></td>
					<td><a href="cart.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger"><i class="fa fa-trash"></i></span></a></td>
				</tr>
			<?php	
					$total = $total + ($values["Qty"] * $values["Price"]);
				}
			?>
				<tr>
					<td colspan="4" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total, 2); ?></td>
					<td></td>
				</tr>
                <tr>
					<td><a class="btn btn-danger" href="checkout.php">Checkout</a></td>
                    <td><a class="btn btn-danger" href="cart.php?action=clear"><b>Empty Cart</b></a></td>
				</tr>
			<?php
			}
			else
			{
				echo '
				<tr>
					<td colspan="5" align="center">No Item in Cart</td>
				</tr>
				';
			}
			?>
			</table>
			</div>
		</div>
</div>

<?php
include('footer.php');
?>
