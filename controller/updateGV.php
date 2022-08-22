<?php
    include_once "../connect/connect.php";
    $id = $_POST['id'];
    $magv = $_POST['magv'];
    $tengv = $_POST['tengv'];
    $tuoi = $_POST['tuoi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $tenlop = $_POST['tenlop'];
    $tennganh = $_POST['tennganh'];
    $tenkhoahoc = $_POST['tenkhoahoc'];
    $anhgv = $_POST['anhgv'];

    $link_anh = "http://192.168.43.42/QLgv/controller/images";
    $dir = "./images";
    if(!file_exists($dir)){
        mkdir($dir,0755,true);
    }
    $name = "/".rand().".jpeg";
    $dir = $dir.$name;
    if(file_put_contents($dir,base64_decode($anhgv))){
        $file_anh = $link_anh.$name;
        $query = "UPDATE giang_vien SET ma_gv = '$magv',ten_gv = '$tengv', anh_gv = '$file_anh', tuoi = $tuoi, email = '$email', dia_chi = '$diachi'
        , ma_lop = $tenlop, ma_nganh = $tennganh, ma_khoa = $tenkhoahoc WHERE id = $id ";
        // echo $sql_insert;
        $result = $conn ->query($query);
        if($result){
            echo "1";
        }
    }else{
        echo json_encode([
            "message" => "The file not OK, check again",
            "status" => "Error"
        ]); 
    }
?>