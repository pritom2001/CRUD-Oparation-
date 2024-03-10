<?php 
include 'connect.php';
$id = $_GET['updateid'];
$sql= "SELECT * FROM `crud`";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "UPDATE `crud` SET  id= '$id',`name` = '$name', `email` = '$email', `mobile` = '$mobile', `password` = '$password' WHERE id= $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "your data successfully updated";
        header('location:display.php');

      
    }else{
        die("sorry!connection failed" . mysqli_error($conn));
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USER php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h4 class="text-center bg-success p-3">Crud operation</h4>
    <form method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" id="name" autocomplete="off" name="name" placeholder="Enter your name" value="<?php echo $name ;?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input type="email" class="form-control" id="email" autocomplete="off" name="email" placeholder="Enter your email address" value="<?php echo $email; ?>">
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile number :</label>
    <input type="number" class="form-control" id="mobile" autocomplete="off" name="mobile" placeholder="Enter your mobile number " value="<?php echo $mobile; ?>">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password :</label>
    <input type="password" class="form-control" id="password" autocomplete="off" name="password" placeholder="give a password" value="<?php echo $password; ?>">
  </div>
 
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
   
  </body>
</html>