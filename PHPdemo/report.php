<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_POST["username"];
        $myfile = fopen("./report.txt", "a");
        $str = $name."\r\n";
        fwrite($myfile,$str);
        fclose($myfile);
 		echo "<h1>收到反馈</h1>";
    ?>
    <meta http-equiv="refresh" content="1;
        url=first.html"> 
</body>
</html>