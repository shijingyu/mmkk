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
<div id="urHere">MkStone 管理中心<b>></b><strong>文章列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>会员列表</h3>
    
        <div id="list">
    <form name="action" method="post" action="article_show.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="35" align="center">编号</th>
      <th width="100" align="left">会员名称</th>
      <th width="200" align="left">会员密码</th>
      <th width="200" align="left">邮箱</th>

      <th width="80" align="center">删除</th>
     </tr>


  <!--         <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="10" /></td>
      <td align="center">10</td>
      <td><a href="article.php?rec=edit&id=10">移动互联网产品设计的核心要素有哪些？</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
             <a href="article.php?rec=del&id=10">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="9" /></td>
      <td align="center">9</td>
      <td><a href="article.php?rec=edit&id=9">详解如何利用RSS进行网络推广</a></td>
      <td align="center"><a href="article.php?cat_id=2">行业新闻</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
             <a href="article.php?rec=del&id=9">删除</a>
             </td>
     </tr> -->
          

<?php
header("Content-Type: text/html; charset=utf8");
   // if(!isset($_POST["submit"])){
      //  exit("错误执行");
   // }//检测是否有submit操作 

include('MkStone_Connect.php');//链接数据库
$q = "select * from stone";
$result = mysql_query($q);
while($row=mysql_fetch_assoc($result))
{
 echo"<tr>.<td align='center'><input type='checkbox' name='checkbox[]'  /></td><td align='center'>".$row["id"]."</td><td align='left'>".$row["usename"]."</td><td align=left>".$row["password"]."</td><td align='left'>".$row["mail"]."</td>.<td align='center'><a href='delete.php?action1=del&usenameid=".$row["id"]."'>删除</a></td></tr>";
  
  
}








?>










         </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
    
     </select>
     
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 10 个记录，共 1 页，当前第 1 页 | <a href="article.php?page=1">第一页</a> 上一页 下一页 <a href="article.php?page=1">最末页</a></div>           </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2016 MkStone，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
 <script type="text/javascript">
 
 onload = function()
 {
   document.forms['action'].reset();
 }

 function douAction()
 {
     var frm = document.forms['action'];

     frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
 }
 
 </script>
</body>
</html>
