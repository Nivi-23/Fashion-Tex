<?php
session_start(); 
include("common/db.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myusername = $_POST['username'];
  $mypassword = $_POST['password']; 
  
  $sql = "SELECT * FROM reg WHERE username = '$myusername' and password = '$mypassword'";
  $result = mysqli_query($con,$sql);
  //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //$active = $row['active'];
  
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {
     $_SESSION['username'] = $myusername;
     echo $_SESSION['username'];
     header("location: index.php");
  }else {
     $error = "Your Login Name or Password is invalid";
  }
}
      ?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="./common/login.css">
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>

            <form class="form-signin"  method="post">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
                
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>