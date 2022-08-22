<?php
    $conn = mysqli_connect("localhost","root","") or die ("Connect Fail");
    $db = $conn->select_db("qlsv")or die ("Select Fail");
?>