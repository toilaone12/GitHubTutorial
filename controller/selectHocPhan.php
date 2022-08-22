<?php
    include_once "../module/hocphan.php";
    include_once "../connect/connect.php";
    $query = "SELECT * FROM hoc_phan";
    $result = $conn -> query($query);
    if($result->num_rows > 0){
        $array = [];
        while($row = $result->fetch_assoc()){
            $class = new HocPhan($row['id_hoc_phan'],$row['diem_tb']);
            array_push($array,$class);
        }
        echo json_encode($array);
    }
?>