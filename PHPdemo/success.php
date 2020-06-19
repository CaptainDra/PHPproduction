<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_POST["username"];
        $pwd = $_POST["pwd"];
        $fp = fopen("$name.txt", "w");
        $str = "user:".$name."&password:".$pwd."\r\n";
        fwrite($fp,$str);
        fclose($fp);
        echo "<h1>欢迎注册,".$name."！</h1>";
    ?>
     <meta http-equiv="refresh" content="1;
        url=first.html"> 

</body>
</html>