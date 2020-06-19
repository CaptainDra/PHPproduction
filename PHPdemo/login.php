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
        $myfile = fopen("./$name.txt", "r") or die("Unable to open file!");
        $str1 = "user:".$name."&password:".$pwd."\r\n";
        $str2 = fgets($myfile);
        
        if($str1 == $str2)
        {
            echo "<h1>欢迎,".$name."！</h1>";

            header("Location: inside.php"); 
            exit;
        }
        else
        echo "ERROR password or id";
        fclose($myfile);
    ?>
</body>
</html>