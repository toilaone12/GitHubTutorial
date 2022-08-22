<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $tennganh = $_POST['tennganh'];
    $query = "UPDATE nganh SET ten_nganh = '$tennganh'
     WHERE id_nganh = $id ";
        // echo $sql_insert;
    $result = $conn ->query($query);
    if($result){
        echo "1";
    }
?>