<?php
/**
 * Created by PhpStorm.
 * User: Leonard
 * Date: 2018/5/19
 * Time: 0:15
 */
//session_unset();
$mysql_server_name="localhost:3306"; //改成自己的mysql数据库服务器
$mysql_username="root"; //改成自己的mysql数据库用户名
$mysql_password="leonard205"; //改成自己的mysql数据库密码
$mysql_database="school"; //改成自己的mysql数据库名
$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$contents = $_POST['contents'];
$username = ($_POST['username']);
$password = ($_POST['password']);
//判断用户名和密码是否输入正确
$sql = "SELECT type FROM user WHERE id='$username' and password='$password' and type='$contents'";
$resultSet = mysqli_query($conn,$sql);
if(mysqli_num_rows($resultSet)>0){
    session_start();
    //unset($_SESSION);
    echo 'Welcome to page #1';
    $_SESSION['id'] = $username;
    $_SESSION['time']     = time();
    if($contents==1)
    {
        echo '<br /><a href="ad/paggh3ye2.php">进入管理员界面</a>';
        //header("location:ad/adfront.html");
    }
    if($contents==2)
    {
        echo '卖家您好';
        echo '<br /><a href="teacher/notes.php">进入买家页面</a>';
    }
    if($contents==3)
    {
        echo '买家你好';
        echo '<br /><a href="index.html">进入卖家页面</a>';
    }
}else{
    echo "你不是这的用户，快滚！";
}
?>