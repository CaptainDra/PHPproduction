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
$sql = "SELECT * FROM c ";
$resultSet = mysqli_query($conn,$sql);
echo "<tr>";
echo "<td>课程号</td>";
echo '  ';
echo "<td>课程名</td>";
echo '  ';
echo "<td>教师</td>";
echo '  ';
echo "<td>课程简介</td>";
echo "</tr><br> ";
while($row = mysqli_fetch_array($resultSet))//转成数组，且返回第一条数据,当不是一个对象时候退出
{
    echo "<tr>";
    echo "<td>" . $row['cno'] . "</td>";
    echo ' ';
    echo "<td>" . $row['cname'] . "</td>";
    echo ' ';
    echo "<td>" . $row['cteacher'] . "</td>";
    echo '  ';
    echo "<td>" . $row['cinf'] . "</td>";

    echo "</tr><br> ";
}
echo "</table>";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  <!-- html encode type-->
    <title>选课</title>
</head>
<body>
<form action="addcourse.php" method="post">
    <p>课程号<input type="text" name="cno"></p>
    <p>老师<input type="text" name="cteacher"></p>
    <p><input type="submit" value="添加课程"></p>
</form>
</body>
</html>
