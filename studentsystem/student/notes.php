<?php
/**
 * Created by PhpStorm.
 * User: Leonard
 * Date: 2018/5/27
 * Time: 19:21
 */
session_start();

echo '欢迎来到主界面<br />';
echo $_SESSION['id'];
echo '同学<br />';
echo '<br /><br /><br />';
echo '<br /><a href="stuchoose.php">选课</a><br />';
echo '<br /><a href="studentchosen.php">选课查询</a><br />';
echo '<br /><a href="studentscore.php">分数查询</a><br />';
echo '<br /><a href="studentcourse.php">浏览课程信息与课件</a><br />';
//echo '<br /><a href="givepoint.php">打分</a><br />';



$mysql_server_name="localhost"; //改成自己的mysql数据库服务器
$mysql_username="root"; //改成自己的mysql数据库用户名
$mysql_password="leonard205"; //改成自己的mysql数据库密码
$mysql_database="school"; //改成自己的mysql数据库名
$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_SESSION['id'];
echo '收件箱<br />';
echo '来自：内容：<br />';
$sql = "SELECT note,fromid FROM notes WHERE toid = '$username'";
$resultSet = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($resultSet))//转成数组，且返回第一条数据,当不是一个对象时候退出
{
    echo "<td>" . $row['fromid'] . "</td>";
    echo '       ';
    echo '|';
    echo '       ';
    echo "<td>" . $row['note'] . "</td><br />";
}
echo '<br /><br /><br />发件箱<br />';
echo '送到：内容：<br />';
$sql = "SELECT note,toid FROM notes WHERE fromid = '$username'";
$resultSet = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($resultSet))//转成数组，且返回第一条数据,当不是一个对象时候退出
{
    echo "<td>" . $row['toid'] . "</td>";
    echo '       ';
    echo '|';
    echo '       ';
    echo "<td>" . $row['note'] . "</td><br
/>";
}
echo '<br /><a href="send.html">发送</a>';
?>