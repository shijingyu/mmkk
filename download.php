<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Download</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/download.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- 头部开始 -->
  <header>
  <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">mkStone</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html"><img src="images/artical_03.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a href="index.html">首页</a></li>
            <li><a href="article.php">文章</a></li>
            <li><a href="ask.html">问答</a></li>
            <li class="active"><a href="download.php">资源</a></li>
            <li><a href="about.html">关于</a></li>
      </ul>
      

      <!-- 账户没有登录前显示的界面 -->
      <!-- <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">登录注册<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="login_register.html">登录</a></li>
            <li><a href="login_register.html">注册</a></li>
            <li><a href="article.html">退出</a></li>
          </ul>
        </li>
      </ul> -->
       <!-- 结束 -->


       <!-- 账户登录后显示 -->
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/artical_09.png" style="width: 18px;" alt="" ><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="my.php">个人资料</a></li>
            <li><a href="article.php">退出</a></li>
          </ul>
        </li>
      </ul>
      <!-- 结束 -->


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<!-- 头部结束 -->

<!-- 正文 -->
<div class="content">
  <div class="container">
  <h1>资源下载</h1>
    <ol class="breadcrumb">
      <li><a href="#">主页</a></li>
      <li><a href="#">资源</a></li>
      <li class="active">type</li>
    </ol>
    <!-- 栅格布局 -->
    <div class="row">
            <!-- 文章左边 -->
           <div class="content-l col-md-10">
             
             
<?php

  header("Content-Type: text/html; charset=utf8");
   // if(!isset($_POST["submit"])){
      //  exit("错误执行");
   // }//检测是否有submit操作 

include('MkStone_Connect.php');//链接数据库
$q = "select * from res";
$result = mysql_query($q);
while($row=mysql_fetch_assoc($result))
{

        echo"
    
                <div class='box row'>
                  
                  <div class='download-img col-md-2'>

                  <a href='single.html'><img src='images/source_03.png' alt=''></a>
                
                </div>
               
                  <div class='download-dec col-md-10'>
                   
                    <h1>".$row['resname']."</h1>
                    <p class='dec1'>                
                        ".$row['recontent']."
                    </p>
                    <p class='dec2'>
                        <span>大小</span>：".$row['space']."  &nbsp;     <span>上传时间</span>：".$row['uptime']." &nbsp;<span>软件类型</span>：".$row['resfenlei']." <br> 
                        <span>语言</span>：".$row['language']."&nbsp; &nbsp;&nbsp; &nbsp;<span>支持系统</span>：".$row['support']."
                    </p>
                    <a href='".$row['http']."'>
                      <button type='button' class='btn btn-primary'>立即下载</button>
                    </a>
                  </div>
                </div>



";
                
}

?>
                









           </div>
           <!-- 文章右边 -->
           <div class="content-r col-md-2">
               <p class="p1">
                  本站收集了各种实用的PC和移动端应用，团队不定时进行软件的发布及补档，如果您发现资源过期了请及时留言联系我们。<br>
                  xy960722@gmail.com
               </p>
               <p class="p2">              
                  <p>如果喜欢我们的网站，请支持我们！</p>
                  <img style="width:180px" src="images/erweima.jpg" alt="">
               </p>
           </div>
           <!-- 文章右边-end -->
        </div>
        <!-- 栅格布局-end -->
    </div>
    <!-- 居中容器-end -->
</div>
     <!-- 正文结束 -->

<!-- 分页 -->
<nav>
<div class="container">
  <ul class="pagination pagination-lg">
    <li><a href="#">&laquo;</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
  </div>
</nav>

<!-- 分页-end -->

<!-- 侧边栏开始 -->
 <ul class="sidebar">
    <li class="li2">
      <a href="">收藏</a>
    </li>
    <li class="li3">
      <a href="">热门</a>
    </li>
    <li class="li4">
      <a href="">热词</a>
    </li>
    <li class="li5">
      <a href="">搜索</a>
    </li>
    <li class="li6">
      <a href="">咨询</a>
    </li>
    <li class="li7" id="gotop"></li>
  </ul>  
<!-- 侧边栏-end -->

  <!-- 底部开始 -->
 <footer>
   <div class="container">
     <p>Copyright © 2016 MkStone  All rights reserved. <span><a href="">赞助</a></span></p>
   </div>
 </footer>
 <!-- 底部结束 -->

    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
         <!--  侧边栏js -->
<script>
$(document).ready(function(){
  $("#gotop").click(function(){
  $("html,body").animate({scrollTop:0},300);
});
})
</script>
<script type="text/javascript">
$(function () {$('img').hover(function() {
$(this).fadeTo("fast", 0.3);},
function() {$(this).fadeTo("fast", 1);});});</script>
  </body>
</html>