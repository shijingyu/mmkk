<?php
    header("Content-Type: text/html; charset=utf8");
   // if(!isset($_POST["submit"])){
      //  exit("错误执行");
   // }//检测是否有submit操作 

session_start();
include('MkStone_Connect.php');//链接数据库
    $name = $_POST['username'];//post获得用户名表单值
    $password = $_POST['password'];//post获得用户密码单值

    //if ($name && $password){//如果用户名和密码都不为空
             $sql = "select * from stone where usename = '$name' and password='$password'";//检测数据库是否有对应的username和password的sql
             
$check_query = mysql_query($sql);
if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $name;
    $_SESSION['userid'] = $result['id'];
    //echo $name,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';

    echo "<<script>

    alert('登录成功');location.href='article.html'


    </script>";


  //            $result = mysql_query($sql);//执行sql
  //            $rows=mysql_num_rows($result);//返回一个数值
  //           // $result_check=mysql_fetch_array($reslt);
  //            if($rows){//0 false 1 true           
  //               //      echo "
  //               //     <script>
  //               //             alert('登录成功');location.href='article.html'  
  //               //     </script>

  //               // ";          //登录成功并跳转到文章页面
  //                  $_SESSION['username']=$name;
  //                  $_SESSION['userid']=$result_check['id'];
                 
  // echo $name,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
                   exit();
             }else{
             
                echo "
                    <script>
                            alert('用户名或者密码错误');location.href='login_register.html'
                    </script>

                ";//如果错误使用js 跳转到登录页面重试;
             }
             

    //}
    mysql_close();//关闭数据库
?>
