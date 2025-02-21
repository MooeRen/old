<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../favicon.ico" >
<title>边缘笔记屋留言本</title>

<script languange="JavaScript">
        var password=""
        password=prompt('请输入密码(本网站需输入密码才可以进入):','');
        function custom_close()
        {
            window.opener=null;
            window.open('','_self');
            window.close();        
        }   
        if  (password !='Mooe7979779')
            {alert("密码不正确，无法进入本站！！！")
            
            custom_close();            
            alert("即将打开本站主页")//加这一段是为了避免有些浏览器不支持关闭浏览器的js ,所以请求跳转到一个新页面！
            window.location.href='https://mooe.ren';
            }
</script>


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
	width: 900px;
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
			
			<a href='index.php'>添加留言</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='show.php'>查看留言</a>
			<hr/>
			
			<table  width='900' border='1' cellpadding='5' >
				<tr>
					<th>标题</th>
					<th>作者</th>
					<th>内容</th>
					<th>i p</th>
					<th>时间</th>
                    <th>操作</th>
				</tr>
				<?php
					//读文件
					$info=rtrim(file_get_contents("ly.db"),"@");
					if($info != ""){
						//拆分
						$list=explode("@@",$info);
						
						//var_dump($list);
						//遍历
						foreach($list as $k=>$v){
						
							//拆分v
							$oncely=explode("##",$v);

							echo "<tr>";
								echo "<td>{$oncely[0]}</td>";
								echo "<td>{$oncely[1]}</td>";
								echo "<td>{$oncely[2]}</td>";
								echo "<td>{$oncely[3]}</td>";
								echo "<td>{$oncely[4]}</td>";
								echo "<td><a href='doDel.php?k={$k}'>删除</a></td>";
							echo "</tr>";
						}
					
					}else{
						echo "无数据";
					}
					
				
				
				?>
			</table>
		
		</center>



</div>
<div id="mbottom">
	<a href="https://beian.miit.gov.cn/" target="_blank"><img src="../images/beian.png" width="20" height="20" alt="Mooe.Ren" /><span style="font-family:'ShouRuiBoTi';" >滇ICP备2023004411号-1</span></a>
	 ©2001-2023 Powered by Mooe.Ren 最近更新时间：2023年7月8日
</div>

</div>
</body>
</html>
