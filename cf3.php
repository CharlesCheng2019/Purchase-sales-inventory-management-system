<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$rkno=$_POST['rkno'];
$ckno=$_POST['ckno'];
$wlno=$_POST['wlno'];
$cfsj=$_POST['cfsj'];
$cfsl=$_POST['rksl'];


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
  
if(!$conn)
{ die('数据库连接失败：'.mysqli_error($con));}
mysqli_select_db($conn,'jxc');
mysqli_query ($conn,"SET NAMES utf8");//设置字符集为中文
$sql = "select * from cf where ckno='$ckno' and wlno='$wlno' ";
$result= mysqli_query($conn,$sql) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql);
  if($row = mysqli_fetch_array($result)){
	  
	  $cfsl=$cfsl+$row ['cfsl'];
	   $cfno=$row ['cfno'];
	   $wlno=$row['wlno'];
	   // 插入数据到数据库  
  //  $sql = "INSERT INTO cf(ckno,wlno,cfsj, cfsl) VALUES ('$ckno', '$wlno', '$cfsj', '$cfsl')";  
    $sql="update cf set cfsl='".$cfsl."' where $cfno='".$cfno."' and wlno='".$wlno."' ";
    if ($conn->query($sql) === TRUE) {  
        echo "数据插入成功！";  
		
    
			  $sql2="update gy set rk='1' where $rkno='".$rkno."' ";
	       if ($conn->query($sql2) === TRUE) { //echo "第1次输出".$rkno;
		                                     }
               
			 
		
    } else {  
        echo "数据插入失败：" . $conn->error;  
    }  
	  
	  }

 else{ 
    // 插入数据到数据库  
    $sql = "INSERT INTO cf(ckno,wlno,cfsj, cfsl) VALUES ('$ckno', '$wlno', '$cfsj', '$cfsl')";  
  
    if ($conn->query($sql) === TRUE) {  
        echo "数据插入成功！";  
		  $sql2="update gy set rk='1' where rkno='".$rkno."'";
	       if ($conn->query($sql2) === TRUE) {// echo "第2次输出".$rkno;
		                                     }
               
    } else {  
        echo "数据插入失败：" . $conn->error;  
    }  
 }
  
// 关闭数据库连接  
$conn->close();  
?>  
  

</body>
</html>