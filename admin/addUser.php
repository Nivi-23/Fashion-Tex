<?php
    include('../common/db.php');
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO users (name,username,password,role)
VALUES ('nivi', 'nivi@gmail.com', md5('12345'),'admin')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    }
?>

<form method="POST">
<div class="form-group row">
    <label for="staticEmail" class="col-form-label">Name</label>
      <input type="text" class="form-control" id="name" value="email@example.com">
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-form-label">Email</label>
      <input type="text" class="form-control" id="email" value="email@example.com">
  </div>
  <div class="form-group row">
    <label for="inputPassword" class=" col-form-label">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group row">
  <label for="inputState">State</label>
      <select id="role" class="form-control">
        <option selected value="user">User</option>
        <option value="admin">Admin</option>
      </select>
  </div>
<div class="d-flex justify-content-between">
<button type="submit" class="btn btn-primary" name="submit">Add</button>
  <button type="button" class="btn btn-danger">Cancel</button>
</div>
</form>

