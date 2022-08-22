<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $query = "DELETE FROM sinh_vien WHERE id = $id";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }
?>