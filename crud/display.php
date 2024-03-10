<?php
include "connect.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<div class="container py-4">
    <button class="btn bg-primary"><a href="user.php" class="text-light">Add data</a>
    </button>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">S No</th>
                <th scope="col">Name</th>
                <th scope="col">Email Adress</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `crud`";
            $result  = mysqli_query($conn, $sql);
            if (!$result) {
                die("sorry! connection failed" . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $password = $row['password'];
                echo '  <tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $password . '</td>
                <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>
              
    

            </tr>';
            }


            ?>

        </tbody>
    </table>
</div>


<body>

</body>

</html>