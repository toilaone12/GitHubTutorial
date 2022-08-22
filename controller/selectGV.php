<?php
    include_once "../module/giangvien.php";
    include_once "../connect/connect.php";
    $query = "SELECT * FROM giang_vien gv, lop l, nganh n, khoa k
    WHERE gv.ma_lop = l.id_lop AND gv.ma_nganh = n.id_nganh AND gv.ma_khoa = k.id_khoa";
    $result = $conn->query($query);
    if($result -> num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            $student = new GiangVien($row['id'],$row['anh_gv'],$row['ma_gv'],$row['ten_gv'],$row['tuoi'],$row['sdt'],
            $row['email'],$row['dia_chi'],$row['ma_lop'],$row['ten_nganh'],$row['ten_khoa']);
            array_push($array,$student);
        }
        echo json_encode($array);
    }
?>