<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $tenkhoahoc = $_POST['tenkhoahoc'];
    $nienkhoa = $_POST['nienkhoa'];
    $query = "UPDATE khoa_hoc SET ten_khoa_hoc = '$tenkhoahoc', nien_khoa = '$nienkhoa'
     WHERE id_nien_khoa = $id ";
        // echo $sql_insert;
    $result = $conn ->query($query);
    if($result){
        echo "1";
    }
?>