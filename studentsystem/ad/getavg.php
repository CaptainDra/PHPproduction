<?php
function createImage($dataname,$datavalue,$twidth,$tspace,$height){
    header("Content-Type:image/jpeg");
    $i = 0;
    $j = 0;
    $k = 0;
    $num = sizeof($dataname);
    $width = $num * ($twidth + $tspace) + 20 ;//获取图像的宽度
    $im = imagecreate($width,$height);//创建图像

    $bgcolor = imagecolorallocate($im,255,255,255);//背景色
    $jcolor = imagecolorallocate($im,255,255,0);//矩形的背景色
    $acolor = imagecolorallocate($im,0,0,0);//线的颜色

    imageline($im,25,$height-20,$width-5,$height -20,$acolor);//X轴
    imageline($im,25,$height-20,25,2,$acolor);//Y轴
    while($i< $num){
        imagefilledrectangle($im,$i*($tspace+$twidth)+40,$height-$datavalue[$i]*5-20,$i*($twidth+$tspace)+$tspace+40,$height-20,$jcolor);//画矩形
        imagestring($im,3,$i*($tspace+$twidth)+40,$height-135,$datavalue[$i],$acolor);//在柱子上面写出值
        imagestring($im,3,$i*($tspace+$twidth)+48,$height-15,$dataname[$i],$acolor);//在柱子下面写出值
        $i ++;

    }
    //while($j < 400/10){
        //imageline($im,25,($height-20)-$j*8,28,($height-20)-$j*8,$acolor);//画出刻度
        //imagestring($im,2,5,($height-30)-$j*8,$j*10,$acolor);//标出刻度值
        //$j = $j +10;
    //}
    imagejpeg($im);
}
//$data =array("1"=>21,"2"=>31 );
$mysql_server_name="localhost"; //改成自己的mysql数据库服务器
$mysql_username="root"; //改成自己的mysql数据库用户名
$mysql_password="leonard205"; //改成自己的mysql数据库密码
$mysql_database="school"; //改成自己的mysql数据库名
$conn=new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//判断用户名和密码是否输入正确
$sql = "SELECT cno,AVG(score) FROM cs where score > '0' GROUP BY cno";
$resultSet = mysqli_query($conn,$sql);
$dataname = array();
$datavalue = array();
while($row = mysqli_fetch_array($resultSet))//转成数组，且返回第一条数据,当不是一个对象时候退出
{
    $dataname[] = $row['cno'];
    $datavalue[] = $row['AVG(score)'];
}

createImage($dataname,$datavalue,400,40,500);

?>