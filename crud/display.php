<?php
    include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud opperation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add user</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql = "SELECT * FROM crud";
    $result= mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
           $Id = $row['id'];
           $Name = $row['name'];
           $Email = $row['email'];
           $Mobile = $row['mobile'];
           $Password = $row['password'];
           echo '<tr>
           <th scope="row">'.$Id.'</th>
           <td>'.$Name.'</td>
           <td>'.$Email.'</td>
           <td>'.$Mobile.'</td>
           <td>'.$Password.'</td>
           <td>
           <button class="btn btn-primary"><a href="" class="text-light">Update</a></button>
           <button class="btn btn- danger"><a href="" >Delete</a></button>
            </td>
         </tr>';
        }
    }
  ?>
   
</table>
    </div>
  </body>
</html>