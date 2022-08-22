<?php
    include_once "../module/khoahoc.php";
    include_once "../connect/connect.php";
    $query = "SELECT * FROM khoa_hoc";
    $result = $conn -> query($query);
    if($result->num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            $class = new KhoaHoc($row['id_nien_khoa'],$row['ten_khoa_hoc'],$row['nien_khoa']);
            array_push($array,$class);
        }
        echo json_encode($array);
    }
?>