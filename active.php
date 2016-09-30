<?php
include_once("MkStone_Connect.php");

$verify = stripslashes(trim($_GET['verify']));
$nowtime = time();

$query = mysql_query("select id,token_exptime from stone where status='0' and `token`='$verify'");
$row = mysql_fetch_array($query);
if($row){
	if($nowtime>$row['token_exptime']){ //30min
		$msg = '您的激活有效期已过，请登录您的帐号重新发送激活邮件.';
	}else{
		mysql_query("update stone set status=1 where id=".$row['id']);
		if(mysql_affected_rows($con)!=1) die(0);
		$msg = '激活成功！享受MkStone带来的乐趣吧！';
	}
}else{
	$msg = 'error.';	
}

echo $msg;
?>
