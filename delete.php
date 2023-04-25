<?php 
    require "connection.php";
    if (isset($_POST['delete'])){

        $fruit_name = $_POST['fruit_name'];
        $sql = "DELETE FROM fruits WHERE fruit_name = '$fruit_name'";
        $result = mysqli_query($connection, $sql) OR trigger_error("Field sql". mysqli_error($connection), E_USER_ERROR);
        echo "<script> window.location.href = 'register.php' </script>";
        echo "<script> alert ('Delete Success') </script>";
    }
    
?>