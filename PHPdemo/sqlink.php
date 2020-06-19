<?php
/**
 * Created by PhpStorm.
 * User: Leonard
 * Date: 2017/12/28
 * Time: 20:52
 */
$mysqli = new mysqli('nngkstbdbmhb.mysql.sae.sina.com.cn', 'ad', 'ncut1234', 'carsharing', '10451');
if ($mysqli->connect_error) {
    exit($mysqli->connect_error);
}
echo "connect ok";
$mysqli->close();
?>