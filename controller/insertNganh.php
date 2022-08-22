<?php
    include_once "../connect/connect.php";
    $tennganh = $_POST['tennganh'];
    $query = "INSERT INTO nganh VALUES (null,'$tennganh')";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }

?>