<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $query = "DELETE FROM giang_vien WHERE id = $id";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }
?>