<?php
$code = $_POST["code"];
$name = $_POST["name"];
$sex  = $_POST["sex"];
$s=1;
if($sex=="女")
{
    $s=0;
}
$nation = $_POST["nation"];
$birthday = $_POST["birthday"];
$db = new MySQLi("localhost","root","","mydb");
!mysqli_connect_error() or die("连接失败！");
$sql = "update Info set Name='{$name}',Sex={$s},Nation='{$nation}',Birthday='{$birthday}' where Code='{$code}'";
$r = $db->query($sql);
if($r)
{
    header("location:main.php");
}
else
{
    echo "修改失败！";
}