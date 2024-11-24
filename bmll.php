<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>无标题文档</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php  
// 数据库连接信息  
$servername = "localhost";  
$username = "root";  
$password = "root";  
$dbname = "jxc";  
  
// 创建数据库连接  
$conn = new mysqli($servername, $username, $password, $dbname);  
  
// 检查连接是否成功  
if ($conn->connect_error) {  
    die("连接失败: " . $conn->connect_error);  
}  
mysqli_set_charset($conn, "utf8");

// 查询数据库表中的数据  
$sql = "SELECT * FROM bm";  
$result = $conn->query($sql);  
  
// 检查查询结果是否为空  
if ($result = $conn->query($sql)){ 
    
     echo "<table>";  

    while ($row = $result->fetch_assoc()) {  
        echo "<tr>";  
        echo "<td>" . $row["bmno"] . "</td>";  
        echo "<td>" . $row["bmname"] . "</td>";  
        echo "<td>" . $row["bmaddress"] . "</td>";  
		  echo "<td>" . $row["phone"] . "</td>";  
		    echo "<td>" . $row["fzr"] . "</td>";  
        echo "</tr>";  
    }  
  
    // 输出表格尾部 
	
    echo "</table>";  
	
} else {  
    echo "没有找到匹配的数据";  
}  
  
// 关闭数据库连接  
$conn->close();  
?>
</body>
</html>