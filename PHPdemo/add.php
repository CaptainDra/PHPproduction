<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
	include("conn.php");//引入链接数据库 
	if(!empty($_POST['sub'])){ 
	$title=$_POST['title']; 
	$con=$_POST['con']; 
	echo $sql="insert into news(id,title,dates,contents) value (null,'$title',now(),'$con')" ; 
	mysql_query($sql); 
	echo"插入成功"; 
	} 
	?> 
</body>
</html>