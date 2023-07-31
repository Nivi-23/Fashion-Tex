<?php
   include('common/db.php');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Electron - Online Shop for computers and Mobiles</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
      <link rel="stylesheet" href="./common/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" >
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"  />
   </head>
   <body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom ">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fa fa-skype"></i>
        Fashion Tex
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline" name="f1" action="search.php" method="GET">
              <input class="form-control search-input search" type="search" placeholder="Search here..." name="search" id="search">
              <button class="btn btn-warning my-2 my-sm-0 rounded-0 border-0" type="submit">
                 <i class="fa fa-search"></i>
              </button>
            </form>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
          <?php
          if(isset($_COOKIE["shopping_cart"]))
          {
            $total = 0;
            $cookie_data = stripslashes($_COOKIE['shopping_cart']);
            $cart_data = json_decode($cookie_data, true);?>
            <a class="nav-link" href="cart.php">Cart <span class="badge badge-primary"><?php echo count($cart_data);?></span>
            </a> <?php 
}
      ?>  
          </li>
         <?php  
      if (isset($_SESSION['username'])) {

echo '<li class="nav-item"><a class="nav-link" href="#">Hello'.' ' , $_SESSION['username'],'</li>'
.'<li class="nav-item">
<a class="nav-link" href="lockout.php">Logout</a>
</li>';
}
         else{
          echo '<li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>'. '<li class="nav-item">
        <a class="nav-link " href="register.php">Register</a>
      </li>';

         }
              ?>

        </ul>
      </div>
    </div>
  </nav>