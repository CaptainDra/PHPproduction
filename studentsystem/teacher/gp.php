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
$sno = $_POST['sno'];
$cno = $_POST['cno'];
$score = $_POST['score'];
$sql = "UPDATE cs  SET `score` = '$score' WHERE (`cno` = '$cno' and sno = '$sno' );";
$resultSet = mysqli_query($conn,$sql);
echo "<td>" . $score . "</td>";
echo '<br /><a href="notes.php">已修改</a>';
?>
