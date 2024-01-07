<?php

include_once("../sql/dbcon.php");


// รับค่าที่ส่งมาจากฟอร์ม
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$address = $_POST['address'];
$rank = $_POST['rank'];



// คำสั่ง SQL บันทึกข้อมูลลงในตาราง employee

    $sql = "INSERT INTO `list_name` (`list_firstname`, `list_lastname`, `list_sex`, `list_age`, `list_address`, `list_rank`) VALUE ('$firstname', '$lastname', '$sex', '$age', '$address', '$rank')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 'true';
    } else {
        echo 'false';
    }


?>