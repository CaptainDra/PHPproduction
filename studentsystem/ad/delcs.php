<?php
/**
 * Created by PhpStorm.
 * User: Leonard
 * Date: 2018/5/19
 * Time: 0:15
 */

$mysql_server_name="localhost"; //改成自己的mysql数据库服务器
$mysql_username="root"; //改成自己的mysql数据库用户名
$mysql_password="leonard205"; //改成自己的mysql数据库密码
$mysql_database="school"; //改成自己的mysql数据库名
$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//判断用户名和密码是否输入正确
$sql = "SELECT * FROM cs where score = '0'";
$resultSet = mysqli_query($conn,$sql);
echo "<tr>";
echo "<td>学号</td>";
echo '  ';
echo "<td>课号</td>";
echo '  ';
echo "<td>选课状态</td>";
echo "</tr><br> ";
while($row = mysqli_fetch_array($resultSet))//转成数组，且返回第一条数据,当不是一个对象时候退出
{
    echo "<tr>";
    echo "<td>" . $row['sno'] . "</td>";
    echo ' ';
    echo "<td>" . $row['cno'] . "</td>";
    echo '  ';
    echo "<td>" . $row['score'] . "</td>";
    echo "</tr><br> ";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  <!-- html encode type-->
    <title>删课</title>
</head>
<body>
<form action="delcss.php" method="post">
    <p>学号<input type="text" name="sno"></p>
    <p>课号<input type="text" name="cno"></p>
    <p><input type="submit" value="删课"></p>
</form>
</body>
</html>
