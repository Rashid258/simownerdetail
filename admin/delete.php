<?php
if (isset($_GET['id'])) {
include("conn.php");
$id = $_GET['id'];
$sql = "DELETE FROM searchdb WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Data Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Data does not exist";
}
?>