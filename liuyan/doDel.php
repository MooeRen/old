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

	if(!isset($_GET['k'])){
		//k没传过来直接跳回
		header("location:show.php");
		die;
	}
	
	$k=$_GET['k'];
	
	//读文件
	$info=rtrim(file_get_contents("ly.db"),"@");
	
	//拆分
	$list=explode("@@",$info);
	
	//删除
	unset($list[$k]);
	
	if(count($list)>0){
		//数组转字符串回填到db文件
		file_put_contents("ly.db",implode("@@",$list)."@@");
	}else{
		//数组为空回填一个空字符
		file_put_contents("ly.db","");
	}
	
	echo "删除成功，请稍后刷新本页。";
	header("refresh:1;url=liuadmin.php"); 

?>