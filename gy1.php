<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="gy2.php" method="post">
<?php  
header('Content-Type: text/html; charset=UTF-8');
// 连接到MySQL数据库  
$servername = "localhost";  
$username = "root";  
$password = "root";  
$dbname = "jxc";  
  
$conn = new mysqli($servername, $username, $password, $dbname);  
 mysqli_set_charset($conn, 'utf8'); // 设置字符集为UTF-8
if ($conn->connect_error) {  
    die("连接失败: " . $conn->connect_error);  
}  
  
// 查询数据库数据  
$sql = "SELECT * FROM gys";  
$result = $conn->query($sql);  
  
// 创建下拉列表  
echo "供应商编号";
echo "<select name='gysno'>";  
while ($row = $result->fetch_assoc()) {  
  echo "<option value='" . $row['gysno'] . "'>" . $row['gysname'] . "</option>";  
}  
echo "</select>";  
 echo "<br>";
 
   
// 查询数据库数据  
$sql2 = "SELECT * FROM wl";  
$result = $conn->query($sql2);  
  
// 创建下拉列表  
echo "物料编号";
echo "<select name='wlno'>";  
while ($row = $result->fetch_assoc()) {  
  echo "<option value='" . $row['wlno'] . "'>" . $row['wlname'] . "</option>";  
}  
echo "</select>";  
 echo "<br>";
 
 
// 关闭数据库连接  
$conn->close();  
?>
入库时间:<input type="date" name="rksj"/><br>
入库数量:<input type="text" name="rksl"/><br>
<input type="submit" value="提交">
</form>
</body>
</html>