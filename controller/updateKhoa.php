<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $tenkhoa = $_POST['tenkhoa'];
    $query = "UPDATE khoa SET ten_khoa = '$tenkhoa'
     WHERE id_khoa = $id ";
        // echo $sql_insert;
    $result = $conn ->query($query);
    if($result){
        echo "1";
    }
?>