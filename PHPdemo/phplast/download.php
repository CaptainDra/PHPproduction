
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
#=================================
#文件名：PHPDocument1
#作者：十月GG(TaoShuChen)
#OICQ: 2578549
#创建时间：Thu Dec 02 16:05:56 CST 2010
#=================================
$url = "http://www.baidu.com";
$html_content = file_get_contents($url);
$fp = fopen("baidu.html","a");
flock($fp, LOCK_EX) ;
fwrite($fp,$html_content);
flock($fp, LOCK_UN);
fclose($fp);
?>
</body>
</html>