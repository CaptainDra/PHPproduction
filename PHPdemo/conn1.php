<?php
    //引用conn.php文件
    $mysqli = new mysqli('nngkstbdbmhb.mysql.sae.sina.com.cn', 'ad', 'ncut1234', 'carsharing', '10451');
    if ($mysqli->connect_error) {
        exit($mysqli->connect_error);
    }
    $firstname = 'fred';
	$lastname  = 'fox';

	// 构造查询
	// 这是执行 SQL 最好的方式
	// 更多例子参见 mysql_real_escape_string()
	$sql="SELECT * FROM content";
	$result=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_assoc($result);
	echo $row["AUTHOR"];
	printf ("%s : %s)",$row["AUTHOR"],$row["TYPE"]);
	mysqli_free_result($result);
    $mysqli->close();
?>