<?php
    include_once "../module/khoa.php";
    include_once "../connect/connect.php";
    $query = "SELECT * FROM khoa";
    $result = $conn -> query($query);
    if($result->num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            $class = new Khoa($row['id_khoa'],$row['ten_khoa']);
            array_push($array,$class);
        }
        echo json_encode($array);
    }
?>