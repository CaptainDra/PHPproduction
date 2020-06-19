<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $title = $_POST["title"];
        $p1 = $_POST["p1"];
        $p2 = $_POST["p2"];
        $p3 = $_POST["p3"];
        $pic1=$_POST['pic1'];

        echo '<p style="font-size:20pt;color:black;text-align:center">'.$title.'<p>';
        echo '<p style="font-size:12pt;color:black;text-align:center">'.$p1.'<p>';
        echo '<p style="font-size:12pt;color:black;text-align:center">'.$p2.'<p>';
        echo '<p style="font-size:12pt;color:black;text-align:center">'.$p3.'<p>';
        //echo "<p style="text-align:justify;"><span style="font-family:'Microsoft YaHei';font-size:16px;">文字</span></p>";
    ?>
</body>
</html>