<?php
$servername = "localhost";
$username = "root";
$password = "284507"; // 小皮面板默认空，改成你自己的
$dbname = "b2cshop";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
}
?>