<?php
   include('../common/db.php');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Fashion Tex - Online Textile Shop </title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
      <link rel="stylesheet" href="../common/style.css">
   </head>
   <body>
      <?php include('./header.php'); ?>
      
      <div class="container-fluid mt-4">
      <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
          <div class="card p-5">
              <h4>Add users</h4>
              <div class="card-body">
              <?php include('./addUser.php'); ?>
</div>
</div>
</div>
      </div>
      </div>
      <?php include('./footer.php'); ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   </body>
</html>