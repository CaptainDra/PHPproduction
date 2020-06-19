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
$sql = "SELECT * FROM user ";
$resultSet = mysqli_query($conn,$sql);
echo "<tr>";
echo "<td>用户名</td>";
echo '  ';
echo "<td>id</td>";
echo '  ';
echo "<td>密码</td>";
echo '  ';
echo "<td>类型（1：管理员 2：老师 3：学生）</td>";
echo "</tr><br> ";
while($row = mysqli_fetch_array($resultSet))//转成数组，且返回第一条数据,当不是一个对象时候退出
{
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo ' ';
    echo "<td>" . $row['id'] . "</td>";
    echo ' ';
    echo "<td>" . $row['password'] . "</td>";
    echo '  ';
    echo "<td>" . $row['type'] . "</td>";

    echo "</tr><br> ";
}
echo "</table>";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  <!-- html encode type-->
    <title>注销学生</title>
</head>
<body>
<form action="delu.php" method="post">
    <p>id<input type="text" name="id"></p>
    <p>密码<input type="text" name="password"></p>
    <p><input type="submit" value="删了他"></p>
</form>
</body>
</html>