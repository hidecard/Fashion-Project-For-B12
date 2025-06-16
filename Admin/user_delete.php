<?php
ob_start();
include ("../db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id = $id";
    $result = mysqli_query($conn,$sql);
    header("location:user_list.php");
}

?>