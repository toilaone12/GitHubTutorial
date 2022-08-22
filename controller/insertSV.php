<?php
    include_once "../connect/connect.php";
    $masv = $_POST['masv'];
    $tensv = $_POST['tensv'];
    $tuoi = $_POST['tuoi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $tenlop = $_POST['tenlop'];
    $tennganh = $_POST['tennganh'];
    $tenkhoahoc = $_POST['tenkhoahoc'];
    $diem = $_POST['diem'];
    $anhsv = $_POST['anhsv'];

    $link_anh = "http://192.168.43.42/QLSV/controller/images";
    $dir = "./images";
    if(!file_exists($dir)){
        mkdir($dir,0755,true);
    }
    $name = "/".rand().".jpeg";
    $dir = $dir.$name;
    if(file_put_contents($dir,base64_decode($anhsv))){
        $file_anh = $link_anh.$name;
        $query = "INSERT INTO sinh_vien VALUES (null,'$masv','$file_anh','$tensv','$tuoi','$sdt','$email','$diachi',$tenlop,$tennganh,$tenkhoahoc,$diem)";
        // echo $sql_insert;
        $result = $conn ->query($query);
        if($result){
            echo "1";
        }
        // echo json_encode([
        //     "message" => "The file OK",
        //     "status" => "OK"
        // ]);
    }else{
        echo json_encode([
            "message" => "The file not OK, check again",
            "status" => "Error"
        ]); 
    }
?>