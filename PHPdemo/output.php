
<?php
//echo "11";
//$id = $_GET["id"];
$mysqli = new mysqli('nngkstbdbmhb.mysql.sae.sina.com.cn', 'ad', 'ncut1234', 'carsharing', '10451');
if ($mysqli->connect_error) {
    exit($mysqli->connect_error);
}
$sql="SELECT * FROM content WHERE id = 3";
$result=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_assoc($result);
Header(  "Content-type:  image/jpg");
echo $row["GRAPH_FIRST"]."<br>";
//echo $row->AUTHOR;
//printf ("%s : %s)",$row["AUTHOR"],$row["TYPE"]);
?>