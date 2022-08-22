<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $query = "DELETE FROM nganh WHERE id_nganh = $id";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }
?>