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
$sql = "SELECT username FROM user WHERE id='1' and password='1' and type='1'";
echo $sql;
$resultSet = mysqli_query($conn,$sql);
if(mysqli_num_rows($resultSet)>0){
    echo "欢迎狗管理";
}else{
    echo "你不是狗管理，快滚！";
}


?>