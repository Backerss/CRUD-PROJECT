<?php

// กำหนดค่าการเชื่อมต่อฐานข้อมูล
$host = "localhost";
$username = "root";
$password = "";
$database = "crud";

// เชื่อมต่อกับฐานข้อมูล
$conn = mysqli_connect($host, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้: " . mysqli_connect_error());
}

?>