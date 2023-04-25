<?php 
    require "connection.php";
    $sort = "ASC";
    $column = "fruit_id";

    if (isset($_GET['column']) && isset($_GET['sort']))
    {
      $column = $_GET['column'];
      $sort = $_GET['sort'];
      $sort == "ASC" ? $sort == "DESC" : $sort = "ASC";
    }

    $sql = "SELECT * FROM fruits ORDER BY $column $sort ";
    
    $result = mysqli_query($connection, $sql) OR trigger_error("Field sql". mysqli_error($connection), E_USER_ERROR);

   
 
 ?>