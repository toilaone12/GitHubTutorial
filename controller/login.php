<?php
    include_once "../module/user.php";
    include_once "../connect/connect.php";
    $tk = $_POST['tk'];
    $mk = $_POST['mk'];
    $mk_mh = md5($mk);
    $query = "SELECT * FROM tai_khoan WHERE tai_khoan = '$tk' AND mat_khau = '$mk_mh'";
    $result = $conn->query($query);
    if($result -> num_rows > 0){
        $array = [];
        $row = $result->fetch_assoc();
        $user = new User($row['id'],$row['tai_khoan'],$row['mat_khau'],$row['quyen']);
        array_push($array,$user);
        echo json_encode($array);
    }else{
        echo "2";
    }
?>