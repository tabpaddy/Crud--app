<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
        $Name = $row['name'];
        $Email = $row['email'];
        $Mobile = $row['mobile'];
        $Password = $row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id = $id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>











<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"  value="<?php echo $Name; ?>">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $Email; ?>">
  </div>
  <div class="mb-3">
    <label>Mobile number</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value="<?php echo $Mobile; ?>">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $Password; ?>">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
    
  </body>
</html>