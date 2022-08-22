<?php
    include_once "../connect/connect.php";
    $tenkhoahoc = $_POST['tenkhoahoc'];
    $nienkhoa = $_POST['nienkhoa'];

    $query = "INSERT INTO khoa_hoc VALUES (null,'$tenkhoahoc','$nienkhoa')";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }

?>