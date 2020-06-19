<form action="edit.php" method="post"> 
<input type="hidden" name="hid" value="<?php echo $rs['id']?>"/> 
标题: <input type="text" name="title" value="<?php echo $rs['title']?>"><br> 
内容: <textarea rows="5" cols="50" name="con"><?php echo $rs['contents']?></textarea><br> 
<input type="submit" name="sub" value="发表"> 
</form></pre><br> 
if(!empty($_GET['del'])){ $d=$_GET['del']; $sql="delete from news where id ='$d'"; } $query=mysql_query($sql); echo "删除成功"; ?><p></p> 
<pre></pre> 
<br> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
	include("conn.php");//引入链接数据库<pre name="code" class="html"><?php 
	include("conn.php");//引入链接数据库 
	if(!empty ($_GET['id'])){ 	
	$sql="select * from news where id='".$_GET['id']."'"; 
	$query=mysql_query($sql); 
	$rs=mysql_fetch_array($query); 
	} 
	if(!empty($_POST['sub'])){ 
	$title=$_POST['title']; 
	$con=$_POST['con']; 
	$hid=$_POST['hid']; 
	$sql="update news set title='$title',contents='$con' where id='$hid' limit 1 "; 
	mysql_query($sql); 
	echo "<script> alert('更新成功'); location.href='index.php'</script>"; 
	echo"更新成功"; 
	} 
	?> 
</body>
</html>