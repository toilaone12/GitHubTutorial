<?php
    include_once "../module/student.php";
    include_once "../connect/connect.php";
    $query = "SELECT * FROM sinh_vien sv, lop l, nganh n, khoa_hoc kh
    WHERE sv.ma_lop = l.id_lop AND sv.ma_nganh = n.id_nganh AND sv.ma_khoa_hoc = kh.id_nien_khoa";
    $result = $conn->query($query);
    if($result -> num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            $student = new Student($row['id'],$row['ma_sv'],$row['anh_sv'],$row['ten_sv'],$row['tuoi'],$row['sdt'],
            $row['email'],$row['dia_chi'],$row['ma_lop'],$row['ten_nganh'],$row['ten_khoa_hoc'],$row['ma_diem']);
            array_push($array,$student);
        }
        echo json_encode($array);
    }
?>