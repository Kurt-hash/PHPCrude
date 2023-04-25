<?php 
         
         require "retrieve.php";
       

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <h1 class="text-center mt-5">Add Fruits</h1>
    <form action="create.php" method="POST">
        <label for="fruit_name">Fruit Name</label>
        <input type="text" name="fruit_name" id="fruit_name" class=" form-control w-50" placeholder="Enter Fruit Name" required>
        <label for="quantity">Last Name</label>
        <input type="number" name="quantity" id="quantity" class="form-control w-50" placeholder="Enter Quantity" required>  
        <input type="submit" name="submit" id="submit" class="form-control w-25 btn btn-dark mt-2" value="Create">
    </form>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th><a href="?column=fruit_id&sort=<?php echo $sort; ?>">Fruit ID</a></th>
                <th><a href="?column=fruit_name&sort=<?php echo $sort; ?>">Fruit Name</a></th>
                <th><a href="?column=quantity&sort=<?php echo $sort; ?>">Quantity Name</a></th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // $row = mysqli_fetch_array($result);
                while ($row = mysqli_fetch_array($result))
                { ?>
                    <tr>
                        <td> <?php echo $row['fruit_id']?></td>
                        <td> <?php echo $row['fruit_name']?></td>
                        <td> <?php echo $row['quantity']?></td>
                        <td><form action="update.php" method="POST">
                            <input type="submit" class="btn btn-success" name="update" id="update" value="Update">
                            <input type="hidden" name="fruit_name" id="fruit_name" value="<?php echo $row['fruit_name']?>">
                        </form>
                        </td>
                        <td><form action="delete.php" method="POST">
                            <input type="submit" class="btn btn-danger" name="delete" id="delete" value="Delete">
                            <input type="hidden" name="fruit_name" id="fruit_name" value="<?php echo $row['fruit_name']?>">
                        </form>
                        </td>
                    </tr>
                    <?php
                    }
                
            ?>
        </tbody>
    </table>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>