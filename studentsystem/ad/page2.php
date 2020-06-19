<?php
// page2.php

session_start();

echo 'Welcome to page #2<br />';

echo $_SESSION['id'];
echo '<br />';
//echo date('Y m d H:i:s', $_SESSION['time']);

// 类似 page1.php 中的代码，你可能需要在这里处理使用 SID 的场景
//echo '<br /><a href="page1.php">page 1</a>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/login-css.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

        .login{
            border-style:solid;
            border-width:medium;
            height:30%;
            width:20%;
            margin-left:40%;
        }
        .container {
            padding-left:25%;
            padding-right:25%;
            padding-top:10%;
        }
        h1 {
            text-align:center;
        }
        .btn_log {
            margin-left:25%;
            margin-bottom:10%;
            float:left;
        }
        #btn_register {
            margin-left:15%;
            padding-bottom:10%;
        }
        #add_blank {
            padding-bottom:15%;
        }

    </style>
</head>
<body>
<div class="con">
</div>
<div class="login">
    <a  href="sysad.php"><button>系统管理员</button></a>
    <a  href="collegead.php"><button>学院管理员</button></a>
    <div id="add_blank"></div>
</div>
</body>
</html>
