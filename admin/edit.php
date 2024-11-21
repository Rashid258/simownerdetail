<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Update</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("conn.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM searchdb WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="number" placeholder="Number:" value="<?php echo $row["number"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="name" placeholder="name:" value="<?php echo $row["name"]; ?>">
                                </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="cnic" placeholder="Cnic:" value="<?php echo $row["cnic"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="address" id="" class="form-control" placeholder="Address:"><?php echo $row["address"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Update Now" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Data Not Available</h3>";
            }
            ?>
           
        </form>
    </div>
</body>
</html>