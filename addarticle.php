<?php 

header("Content-Type: text/html; charset=utf8");
   // if(!isset($_POST["submit"])){
      //  exit("错误执行");
   // }//检测是否有submit操作 


include('MkStone_Connect.php');//链接数据库





$articlename=$_POST["title"];
$content=$_POST["content"];
$fenlei=$_POST["cat_id"];

$art="insert into `article` (`articlename`,`content`,`fenlei`) values('$articlename','$content','$fenlei')";

$artcle= mysql_query($art,$con);
$num = mysql_num_rows($artcle);

if($num>=1)
       {   
            echo "<script>
                         alert('文章添加失败');location.href='addarticle.html'</script>";
           exit;

      }
    else{ 

echo "<script>
                         alert('文章添加成功');location.href='article.php'</script>";


}
 mysql_close($con);//关闭数据库

 ?>