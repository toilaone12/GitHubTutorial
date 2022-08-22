<?php
    include_once "../module/nganh.php";
    include_once "../connect/connect.php";
    $query = "SELECT * FROM nganh";
    $result = $conn -> query($query);
    if($result->num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            $class = new Nganh($row['id_nganh'],$row['ten_nganh']);
            array_push($array,$class);
        }
        echo json_encode($array);
    }
?>