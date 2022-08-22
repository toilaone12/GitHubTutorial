<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $maLop = $_POST['maLop'];
    $tenLop = $_POST['tenLop'];
    $siso = $_POST['siso'];
    $manganh = $_POST['manganh'];
    $makhoahoc = $_POST['makhoahoc'];
    $query = "UPDATE lop SET ma_lop = '$maLop',ten_lop = '$tenLop', si_so = '$siso', ma_nganh = $manganh, ma_khoa_hoc = '$makhoahoc'
     WHERE id_lop = $id ";
        // echo $sql_insert;
    $result = $conn ->query($query);
    if($result){
        echo "1";
    }
?>