<?php
    include_once "../connect/connect.php";
    $tenkhoa = $_POST['tenKhoa'];
    $query = "INSERT INTO khoa VALUES (null,'$tenkhoa')";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }

?>