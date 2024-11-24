<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?





$host = 'localhost';
$dbuser = 'root';
$password = 'root';
$conn = mysqli_connect($host,$dbuser,$password);
if(!$conn)
{ die('数据库连接失败：'.mysqli_error($con));}
mysqli_select_db($conn,'jxc');
mysqli_query ($conn,"SET NAMES utf8");//设置字符集为中文
$sql = "select * from gy where rk !='1' ";
$result= mysqli_query($conn,$sql) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql);
?>

<table border="1" width="20%" >
<tr>
<td>ID</td><td>供应商编码</td><td>供应商名称</td><td>物料编码</td><td>物料名称</td><td>入库时间</td><td>入库数量</td><td>确认入库</td>
</tr>
<?
if ($result->num_rows > 0) {  
    // 输出数据  
    while($row = $result->fetch_assoc()) {  
 

?>
<tr>
<td><input type="text" name="rkno" readonly="readonly" value="<? echo $row ['rkno']?>"/></td>
<td><input type="text" name="gysno"  readonly="readonly" value="<? echo $row ['gysno']?>"/></td>
<?
$gysno=$row ['gysno'];
$sql2 = "select * from gys where gysno ='$gysno' ";
$result2= mysqli_query($conn,$sql2) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql2);
  while($row2 = $result2->fetch_assoc()) { 
?>
<td><input type="text" name="gysname" readonly="readonly"  value="<? echo $row2 ['gysname']?>"/></td>

<? } ?>

<td><input type="text" name="wlno"  readonly="readonly" value="<? echo $row ['wlno']?>"/></td>


<?
$wlno=$row ['wlno'];
$sql3 = "select * from wl where wlno ='$wlno' ";
$result3= mysqli_query($conn,$sql3) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql3);
  while($row3 = $result3->fetch_assoc()) { 
?>
<td><input type="text" name="wlname" readonly="readonly"  value="<? echo $row3 ['wlname']?>"/></td>

<? } ?>


<td><input type="date" name="rksj" value="<? echo $row ['rksj']?>"/></td><td><input type="text" name="rksl"  readonly="readonly" value="<? echo $row ['rksl']?>"/></td>
<td><a  href="cf2.php?uid=<? echo $row['rkno'];?>">入库</a></td>
</tr>
<?
}
}
?>
</table>


</body>
</html>