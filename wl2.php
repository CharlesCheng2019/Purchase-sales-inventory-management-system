<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
//接收来自上一个页面的5个变量的值
$wlname=trim($_POST["wlname"]);
$gg=trim($_POST["gg"]);
$dj=trim($_POST["dj"]);





//判断用户名是否存在


//链接数据库
/*$host = 'localhost';
$dbuser = 'root';
$password = 'root';

*/

include "config.php";
$conn = mysqli_connect($host,$dbuser,$password);
if($conn==false)
  {
    die('数据库连接失败：'.mysqli_error($conn));
   }
 //选中相应的数据库
mysqli_select_db($conn,'jxc');
mysqli_query($conn,"SET NAMES utf8");
//查询是否存在用户名和密码跟我们录入的一致
$sql = "select * from wl where wlname='$wlname' ";
$result= mysqli_query($conn,$sql) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql);
$row = mysqli_fetch_array($result);
if($row==0){//等于0表示不存在相同的用户名
$sql = "insert into wl(wlname,gg,dj) values('$wlname','$gg','$dj')";

$result= mysqli_query($conn,$sql) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$sql);
echo '录入成功，物料名称为'.$wlname.'单价为'.$dj;

           }

if($row!=0)//表示存在相同用户名
 {echo"<script>alert('物料名称已经存在！');history.go(-1);</script>";}

mysqli_close($conn);//数据库断开连接

?>
</body>
</html>