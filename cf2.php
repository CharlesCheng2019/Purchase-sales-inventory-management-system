<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$userid=$_GET['uid'];


$host = 'localhost';
$dbuser = 'root';
$password = 'root';
$conn = mysqli_connect($host,$dbuser,$password);
if(!$conn)
{ die('数据库连接失败：'.mysqli_error($con));}
mysqli_select_db($conn,'jxc');
mysqli_query ($conn,"SET NAMES utf8");//设置字符集为中文
$sql = "select * from gy where rkno='$userid' ";
$result= mysqli_query($conn,$sql) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql);
?>
<form method="post" action="cf3.php">
<table border="1" width="20%" >
<tr>
<td>入库编码</td><td>仓库编码</td><td>物料编码</td><td>存放时间</td><td>存放数量</td>
</tr>
<?
if ($result->num_rows > 0) {  
    // 输出数据  
    while($row = $result->fetch_assoc()) {  
 

?>
<tr>

<td><input type="text" name="rkno" value="<? echo $row ['rkno']?>" readonly="readonly"/></td>

<td>

<?
// 查询数据库数据 
 
$sql2 = "SELECT * FROM ck";  
$result2 = $conn->query($sql2);  
  
// 创建下拉列表  

echo "<select name='ckno'>";  
while ($row2 = $result2->fetch_assoc()) {  
  echo "<option value='" . $row2['ckno'] . "'>" . $row2['ckname'] . "</option>";  
}  
echo "</select>";  
 echo "<br>";
 ?>

 
 </td><td><input type="text" name="wlno" value="<? echo $row ['wlno']?>"/></td><td><input type="date" name="cfsj" /></td><td><input type="text" name="rksl" value="<? echo $row ['rksl']?>"/></td>

</tr>
<?
}
}
?>
</table>
<input type="submit" value="提交"/>
</form>

</body>
</html>