<?php 

header("Content-Type: text/html; charset=utf8");

 

include('MkStone_Connect.php');


if($_GET['action'] == 'del'){

$articleid=$_GET['articleid'];

	$q="delete from article where uid='$articleid'";
 
 mysql_query($q);


 echo "<script>
                         alert('文章删除成功');location.href='article_show.php'</script>";
   
}else if($_GET['action1'] == 'del'){

	$usenameid=$_GET['usenameid'];

	$qq="delete from stone where id='$usenameid'";
	mysql_query($qq);

echo "<script>
                         alert('会员删除成功');location.href='usename.php'</script>";
  
}else if($_GET['action2'] == 'del'){


 $resid=$_GET['resid'];

	$qqq="delete from res where rid='$resid'";
	mysql_query($qqq);

echo "<script>
                         alert('资源删除成功');location.href='res.php'</script>";


 


}

else{

echo "
<script>
                         alert('删除失败！');location.href='iiindex.html'</script>";



}

?>
 ?>