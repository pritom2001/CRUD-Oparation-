<?php

$conn = new mysqli("localhost","root","","crud operation");

if(!$conn){
    die("sorry! connection fail". mysqli_error($conn));
}

?>