<?php
$code = $_POST["code"];
$name = $_POST["name"];
$title  = $_POST["title"];
$nation = $_POST["nation"];
$birthday = $_POST["datee"];
$db = new MySQLi("localhost","root","","mydb");
!mysqli_connect_error() or die("连接失败！");
$sql = "insert into Info values('{$code}','{$name}','{$title}','{$nation}','{$datee}')";
$result = $db->query($sql);
if($result)
{
    header("location:main.php");
}
else
{
    echo "添加失败！";
}