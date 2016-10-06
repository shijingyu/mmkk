<?php 

header("Content-Type: text/html; charset=utf8");
   // if(!isset($_POST["submit"])){
      //  exit("错误执行");
   // }//检测是否有submit操作 


include('MkStone_Connect.php');//链接数据库





$resname=$_POST["name"];
$resfenlei=$_POST["cat_id"];
$space=$_POST["space"];
$rcontent=$_POST["content"];
$http=$_POST["http"];

$res="insert into `res`(`resname`,`resfenlei`,`space`,`rcontent`,`http`) values('$resname','$resfenlei','$space','$rcontent','$http')";

$resss= mysql_query($res,$con);
$num = mysql_num_rows($resss);

if($num>=1)
       {   
            echo "<script>
                         alert('资源添加失败');location.href='addres.html'</script>";
           exit;

      }
    else{ 

echo "<script>
                         alert('资源添加成功');location.href='res.php'</script>";


}
 mysql_close($con);//关闭数据库

 ?>