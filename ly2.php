<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$bmno=$_POST['bmno'];
$wlno=$_POST['wlno'];
$cksj=$_POST['cksj'];
$cksl=$_POST['cksl'];


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
  
    
  //检查物料是否充足
  
  $sql="select * from cf where wlno='".$wlno."'";
  $result= mysqli_query($conn,$sql) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql);
  $row = mysqli_fetch_array($result);
  if($row==0){echo "没有相关物料";die();}
  if($row!=0 and $row['cfsl']<$cksl){echo "物料不够";die();}
  
  
  


  
    // 插入数据到数据库  
    $sql = "INSERT INTO ly(bmno,wlno,cksj, cksl) VALUES ('$bmno', '$wlno', '$cksj', '$cksl')";  
  
    if ($conn->query($sql) === TRUE) {  
        echo "数据插入成功！";  
		 $cfsl=$row['cfsl']-$cksl;
		$sql2="update cf set cfsl='".$cfsl."' where $wlno='".$wlno."' ";
	       if ($conn->query($sql2) === TRUE) { //echo "第1次输出".$rkno;
		                                     }
		
		
    } else {  
        echo "数据插入失败：" . $conn->error;  
    }  
  
  
// 关闭数据库连接  
$conn->close();  
?>  
  

</body>
</html>