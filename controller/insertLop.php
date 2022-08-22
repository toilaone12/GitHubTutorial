<?php
    include_once "../connect/connect.php";
    $maLop = $_POST['maLop'];
    $tenLop = $_POST['tenLop'];
    $siso = $_POST['siso'];
    $manganh = $_POST['manganh'];
    $makhoahoc = $_POST['makhoahoc'];
    $query = "INSERT INTO lop VALUES (null,'$maLop','$tenLop','$siso','$manganh','$makhoahoc')";
    // echo $sql_insert;
    $result = $conn ->query($query);
    if($result){
        echo "1";
    }
    // echo json_encode([
    //     "message" => "The file OK",
    //     "status" => "OK"
    // ]);
?>