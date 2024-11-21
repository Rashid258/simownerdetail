<?php
include('conn.php');
if (isset($_POST["create"])) {
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $cnic = mysqli_real_escape_string($conn, $_POST["cnic"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $sqlInsert = "INSERT INTO searchdb(number , name , cnic , address) VALUES ('$number','$name','$cnic', '$address')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Data Added Successfully!";
        header("Location:admin.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $cnic = mysqli_real_escape_string($conn, $_POST["cnic"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE searchdb SET number = '$number', name = '$name', cnic = '$cnic', address = '$address' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Data Updated Successfully!";
        header("Location:admin.php");
    }else{
        die("Something went wrong");
    }
}
?>