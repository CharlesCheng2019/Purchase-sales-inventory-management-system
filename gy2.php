<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$gysno=$_POST['gysno'];
$wlno=$_POST['wlno'];
$rksj=$_POST['rksj'];
$rksl=$_POST['rksl'];


//echo $gysno.$wlno.$rksj.$rksl;
?>


<?php  
// 连接到MySQL数据库  
$servername = "localhost";  
$username = "root";  
$password = "root";  
$dbname = "jxc";   
  
// 创建连接  
$conn = new mysqli($servername, $username, $password, $dbname);  
  
// 检查连接是否成功  
if ($conn->connect_error) {  
    die("连接失败: " . $conn->connect_error);  
}  
  
  

  
    // 插入数据到数据库  
    $sql = "INSERT INTO gy (gysno,wlno,rksj, rksl) VALUES ('$gysno', '$wlno', '$rksj', '$rksl')";  
  
    if ($conn->query($sql) === TRUE) {  
        echo "数据插入成功！";  
    } else {  
        echo "数据插入失败：" . $conn->error;  
    }  
  
  
// 关闭数据库连接  
$conn->close();  
?>  
  

</body>
</html>