<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../favicon.ico" >
<title>边缘笔记屋留言本</title>
<style type="text/css">
<!--
@font-face {
  font-family: 'LiBianJian'; 
  src: url('../font/LiBianJian.woff'); 
}
@font-face {
  font-family: 'ShouRuiBoTi'; 
  src: url('../font/ShouRuiBoTi.woff');
}
body,td {
	font-family: "LiBianJian", "Arial", "Helvetica", "sans-serif", "宋体";
	font-size: 18px;
	background: #EFEFEF;
	margin: 0;
	padding: 0;
	color: #333;
}
h1 {font-size:20px;margin:18px 0px;border-bottom:1px dotted #666;padding-bottom:3px;}
p {
	line-height: 17px;
	margin: 9px 0px;
}
img {border:none;vertical-align:-3px;}
a {
	font-family: "LiBianJian", "Arial", "Helvetica", "sans-serif", "宋体";
	text-decoration: none;
	color: #03C;
}
a:hover {color:#000}
#allinit {
	width: 762px;
	background: #FFFFFF;
	padding: 6px;
	margin: 6px auto;
	border: 1px solid #000000;
	text-align: left;
}
#mtop {
	border-bottom:2px solid #03C;
}
#mbottom {
	font-family: "ShouRuiBoTi", "Arial", "Helvetica", "sans-serif", "宋体";
	font-size: 17px;
	padding:6px 0px;
	margin-top:18px;
	border-top:2px inset #03C;
}
-->
</style>

</head>

</head>

<body>
<div id="allinit">
<div id="mtop"><img src="../images/title.jpg" alt="边缘笔记屋" /></div>
<div id="mbody">
<br />
		<center>
			

















<?php
	if(empty($_POST)){
		//如果不是post提交自动跳回
		header("location:index.php");
		die;
	}
	//标题不能为空
	if($_POST['title']==""){
		echo "标题不能为空！";
		header("refresh:1;url=index.php");
		die;
	}
	//作者不能为空
	if($_POST['author']==""){
		echo "作者不能为空！";
		header("refresh:1;url=index.php");
		die;
	}
	//内容不能为空
	if($_POST['content']==""){
		echo "内容不能为空！";
		header("refresh:1;url=index.php");
		die;
	}
	
	//拼接字符串
	$info=$_POST['title']."##".$_POST['author']."##".$_POST['content'].
	"##".$_SERVER['REMOTE_ADDR']."##".date("Y-m-d H:i")."@@";
	
	//写入db文件
	file_put_contents("ly.db",$info,FILE_APPEND);
	
	echo "留言成功，请勿多次提交留言，将跳转到留言界面。";
	header("refresh:1;url=show.php");
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
		
		</center>



</div>
<div id="mbottom">
	<a href="https://beian.miit.gov.cn/" target="_blank"><img src="../images/beian.png" width="20" height="20" alt="Mooe.Ren" /><span style="font-family:'ShouRuiBoTi';" >滇ICP备2023004411号-1</span></a>
	 ©2001-2023 Powered by Mooe.Ren 最近更新时间：2023年7月8日
</div>

</div>
</body>
</html>