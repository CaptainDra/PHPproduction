<?php
$code = $_GET["code"];
$db = new MySQLi("localhost","root","","mydb");
!mysqli_connect_error() or die("连接失败！");
$sql = "delete from Info where Code ='{$code}'";
$r = $db->query($sql);
if($r)
{
    header("location:main.php");
}
else
{
    echo "删除失败！";
}