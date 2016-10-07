<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MkStone 管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="iiindex.html"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
     <div class="drop mTopad"><a href="addres.html">资源</a> <a href="addarticle.html">文章</a>  <a href="#">管理员</a> <a href="link.html"></a> </div>
    </li>
    <li><a href="index.html" target="_blank">查看站点</a></li>
    <li class="noRight"><a href="about.html">MkStone+</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="#">编辑我的个人资料</a>
    
     </div>
    </li>
    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="iiindex.html"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
 
   <ul>
 
  <li><a href="res.php"><i class="product"></i><em>资源列表</em></a></li>
 </ul>
  <ul>
  <li><a href="article_show.php"><i class="article"></i><em>文章列表</em></a></li>
 </ul>
  <ul>
  <li><a href="usename.php"><i class="usename"></i><em>会员列表</em></a></li>
 </ul>
   <ul class="bot">
  <li><a href="backup.html"><i class="backup"></i><em>数据备份</em></a></li>

  <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="manager_log.htm"><i class="managerLog"></i><em>操作记录</em></a></li>
 </ul>
</div></div>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">MkStone 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="addmanager.html?rec=add" class="actionBtn">添加管理员</a>网站管理员</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="center">管理员名称</th>
      
      <th align="center">密码</th>
      <th align="center">操作</th>
     </tr>
          


<?php
header("Content-Type: text/html; charset=utf8");
   // if(!isset($_POST["submit"])){
      //  exit("错误执行");
   // }//检测是否有submit操作 

include('MkStone_Connect.php');//链接数据库
$q = "select * from admin";
$result = mysql_query($q);
while($row=mysql_fetch_assoc($result))
{
 echo"<tr><td align='center'>".$row["aid"]."</td><td align='center'>".$row["admin"]."</td><td align='center'>".$row["apassword"]."</td>.<td align='center'><a href='delus.php?rec=del&id=9'>删除</a></td></tr>";
  
  
}




     ?> 










         </table>
                       </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2016 ,MkStone 并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>
