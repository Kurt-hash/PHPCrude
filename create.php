<?php 
    require "connection.php";

    if (isset($_POST['submit'])) 
    {
        $fruit_name = $_POST['fruit_name'];
        $quantity = $_POST['quantity'];
        // $unit_of_measure_unit_id = $_POST['unit_of_measure_unit_id'];

    $sql = "INSERT INTO fruits SET fruit_name = '$fruit_name', quantity = '$quantity'";

    $result = mysqli_query($connection, $sql) OR trigger_error("Field sql". mysqli_error($connection), E_USER_ERROR);
    echo "<script> alert('Successfully Created') </script>";
    
    }
    else {
        echo "<script> window.location.href = 'register.php' </script>";
    }

?>