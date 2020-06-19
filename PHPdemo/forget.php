<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_POST["username"];
        $myfile = fopen("./$name.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        fclose($myfile);
    ?>
    <meta http-equiv="refresh" content="5;
        url=first.html"> 
</body>
</html>