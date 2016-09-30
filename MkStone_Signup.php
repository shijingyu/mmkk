
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
    include('connect.php');//链接数据库
    $q="insert into stone(AUTO_INCREMENT,usename,password,qq,mail) values (null,'$name','$password','$qq','$mail')";//向数据库插入表单传来的值的sql
    $reslut=mysql_query($q,$con);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{
        echo "<script>
                         alert('注册成功');location.href='login_register.html'</script>";//成功输出注册成功
    }

    

    mysql_close($con);//关闭数据库


?>

