<?php
    include_once "../connect/connect.php";
    $magv = $_POST['magv'];
    $tengv = $_POST['tengv'];
    $tuoi = $_POST['tuoi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $tenlop = $_POST['tenlop'];
    $tennganh = $_POST['tennganh'];
    $tenkhoa = $_POST['tenkhoa'];
    $anhgv = $_POST['anhgv'];

    $link_anh = "http://192.168.43.42/QLSV/controller/images";
    $dir = "./images";
    if(!file_exists($dir)){
        mkdir($dir,0755,true);
    }
    $name = "/".rand().".jpeg";
    $dir = $dir.$name;
    if(file_put_contents($dir,base64_decode($anhgv))){
        $file_anh = $link_anh.$name;
        $query = "INSERT INTO giang_vien VALUES (null,'$file_anh','$magv','$tengv','$tuoi','$sdt','$email','$diachi',$tenlop,$tennganh,$tenkhoa)";
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