<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// ตั้งค่าการเชื่อมต่อฐานข้อมูล MySQL
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "your_database";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die(json_encode(array("message" => "Connection failed: " . $conn->connect_error)));
}

// ดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

// สร้าง array สำหรับเก็บผลลัพธ์
$data = array();

if ($result->num_rows > 0) {
    // ดึงข้อมูลแต่ละแถวมาใส่ใน array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // ส่งข้อมูลในรูปแบบ JSON
    echo json_encode($data);
} else {
    echo json_encode(array("message" => "No records found"));
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
