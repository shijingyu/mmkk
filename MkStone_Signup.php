
<?php 

    $server="localhost";//主机
    $db_username="root";//你的数据库用户名
    $db_password="";//你的数据库密码

    $con = mysql_connect($server,$db_username,$db_password);//链接数据库
    if(!$con){
        die("can't connect".mysql_error());//如果链接失败输出错误
    }
    
    mysql_select_db('mkstone',$con);//选择数据库（我的是test）




    header("Content-Type: text/html; charset=utf8");

    //if(!isset($_POST[''])){
     //   exit("错误执行");
    //}//判断是否有前台表单验证成功之后的操作

    $name=$_POST['username'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
    $qq=$_POST['qq'];
    $mail=$_POST['email'];

    $eusername = stripslashes(trim($_POST['username']));
    $epassword = md5(trim($_POST['password']));
    $eemail = trim($_POST['email']);
    //$eregtime = time();
    $token = md5($eusername.$epassword.$eregtime);
    $token_exptime = time()+60*60*24;




    
    $y = "select * from stone where usename='$name'";
    $reslut=mysql_query($y);
    $num = mysql_num_rows($reslut);
    if($num>=1)
       {   
            echo "<script>
                         alert('用户名已存在！');location.href='login_register.html'</script>";
           exit;

      }
    else{ 

// $query=mysql_query($q,$con);//执行sql

//     if (!$query){
//         die('Error: ' . mysql_error());//如果sql执行失败输出错误
//     }else{
       
$sql = "insert into `stone` (`usename`,`password`,`mail`,`token`,`token_exptime`,`regtime`,`qq`) values ('$eusername','$password','$eemail','$token','$token_exptime','$regtime','$qq')";

mysql_query($sql,$con);

                          include_once("smtp.class.php");
                          $smtpserver = "smtp.163.com"; //SMTP服务器
                          $smtpserverport = 25; //SMTP服务器端口
                          $smtpusermail = "13043336375@163.com"; //SMTP服务器的用户邮箱
                          $smtpuser = "13043336375@163.com"; //SMTP服务器的用户帐号
                          $smtppass = "xy960722"; //SMTP服务器的用户密码
                          $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
                          $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
                          $smtpemailto = $eemail;
                          $smtpemailfrom = $smtpusermail;
                          $emailsubject = "用户帐号激活";
                          $emailbody = "亲爱的".$eusername."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/><a href='http://123.206.85.68/mmkk/active.php?verify=".$token."' target='_blank'>http://123.206.85.68/mmkk/active.php?verify=".$token."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- MkStone 敬上</p>";

  $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
  if($rs==1){
   echo "<script>
                         location.href='sendemail.html'</script>";
 
  }else{
    $msg = $rs; 
  }
echo $msg;




                     }

 // }  

    mysql_close($con);//关闭数据库


?>

