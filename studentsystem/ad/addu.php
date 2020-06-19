<?php
/**
 * Created by PhpStorm.
 * User: Leonard
 * Date: 2018/5/28
 * Time: 10:15
 */
session_start();
$mysql_server_name="localhost"; //改成自己的mysql数据库服务器
$mysql_username="root"; //改成自己的mysql数据库用户名
$mysql_password="leonard205"; //改成自己的mysql数据库密码
$mysql_database="school"; //改成自己的mysql数据库名
$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_POST['username'];
$id = $_POST['id'];
$password = $_POST['password'];
$type = $_POST['type'];
$sql = "INSERT INTO user (username, id, password, type) VALUES ('$username', '$id', '$password', '$type')";
$resultSet = mysqli_query($conn,$sql);
echo "<td>" . $username . "</td>";
echo '<br /><a href="sysad.php">已添加</a>';
?>
