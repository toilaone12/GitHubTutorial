<?php
    include_once "../module/class.php";
    include_once "../connect/connect.php";
    $query = "SELECT * FROM lop l, nganh n, khoa_hoc kh WHERE l.ma_nganh = n.id_nganh AND l.ma_khoa_hoc = kh.id_nien_khoa";
    $result = $conn -> query($query);
    if($result->num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            $class = new Classes($row['id_lop'],$row['ma_lop'],$row['ten_lop'],$row['si_so'],$row['ten_nganh'],$row['ten_khoa_hoc']);
            array_push($array,$class);
        }
        echo json_encode($array);
    }
?>