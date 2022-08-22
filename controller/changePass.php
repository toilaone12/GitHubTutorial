<?php
    include_once "../connect/connect.php";
    $tk = $_POST['tk'];
    $mk = $_POST['mk'];
    $mkmh = md5($mk);
    $query = "UPDATE tai_khoan SET mat_khau = '$mkmh' WHERE tai_khoan = '$tk'";
    $result = $conn->query($query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }
?>