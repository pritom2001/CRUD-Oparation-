<?php
include "connect.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `crud` WHERE id=$id";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo " data is deleted successfully";
    }else{
        die("sorry" .  mysqli_error($conn));
    }
}

?>