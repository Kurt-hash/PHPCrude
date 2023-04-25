<?php 
    require "connection.php";
    
    if (isset($_POST['update'])){
        $fruit_name = $_POST['fruit_name'];
        $sql = "SELECT * FROM fruits WHERE fruit_name = '$fruit_name'";
        $result = mysqli_query($connection, $sql) OR trigger_error("Field sql". mysqli_error($connection), E_USER_ERROR);
        $row = mysqli_fetch_assoc($result);
    }
    if (isset($_POST['updateBtn'])){
        $fruit_name = $_POST['fruit_name'];
        $quantity = $_POST['quantity'];
        $sql = "UPDATE fruits SET fruit_name = '$fruit_name', quantity = '$quantity'";
        $result = mysqli_query($connection, $sql) OR trigger_error("Field sql". mysqli_error($connection), E_USER_ERROR);
        // $row = mysqli_fetch_assoc($result);
        echo "<script> alert ('Account Successfully Updated') </script>";
        echo "<script> window.location.href = 'register.php' </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <h3 class="text-center mt-5">Update Fruits</h3>
    <div class="container">
    <form action="update.php" method="POST">
        <label for="fruit_name">Fruit Name</label>
        <input type="text" name="fruit_name" id="fruit_name" class=" form-control w-50" placeholder="Enter Fruit Name" value="<?php echo $row['fruit_name'] ?>" required>
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control w-50" placeholder="Enter Quantity" value="<?php echo $row['quantity'] ?>" required>

        <input type="submit" name="updateBtn" id="updateBtn" class="form-control w-25 btn btn-dark mt-2" value="Update">
    </form>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>