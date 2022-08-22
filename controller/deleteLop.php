<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $query = "DELETE FROM lop WHERE id_lop = $id";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }
?>