<h1>修改数据</h1>
<?php
$code = $_GET["code"];
$db = new MySQLi("localhost","root","","mydb");
!mysqli_connect_error() or die("连接失败！");
$sql1 = "select * from Info where Code='{$code}'";
$r1 = $db->query($sql1);
$att1 = $r1->fetch_row();

?>
<form action="UpdateChuLi.php" method="post">
    <div>代号：<input type="hidden" name="code" value="<?php echo $att1[0] ?>" /></div>
    <div>姓名：<input type="text" name="name" value="<?php echo $att1[1] ?>" /></div>
    <div>性别：
         <input type="radio" value="男" name="sex" <?php echo $att1[2] ? "checked='checked'" : ""; ?> />男
         <input type="radio" value="女" name="sex" <?php echo $att1[2] ? "" : "checked='checked'"; ?> />女
    </div>
    <div>民族:
         <select name="nation">
         <?php
         $db = new MySQLi("localhost","root","","mydb");
         !mysqli_connect_error() or die("连接失败！");
         $sql = "select * from Nation";
         $r = $db->query($sql);
         $att = $r->fetch_all();
         foreach($att as $v)
         {
             if($att1[3]==$v[0])
             {
                 echo "<option value='{$v[0]}' selected='selectec' >{$v[1]}</option>";
             }
             else
             {
                 echo "<option value='{$v[0]}'>{$v[1]}</option>";
             }
             
         }
         ?>
         </select>
    </div>
    <div>生日：<input type="text" name="birthday" value="<?php echo $att1[4] ?>"/></div>
    <div><input type="submit" value="修改数据" /></div>
</form>