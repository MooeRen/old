<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="../favicon.ico" >
<title>边缘笔记屋留言本</title>
<style type="text/css">
<!--
@font-face {
  font-family: 'LiBianJian'; 
  src: url('../font/LiBianJian.woff'); 
}
body td {
  font-family: "LiBianJian", "Arial", "Helvetica", "sans-serif", "宋体";
	font-size: 20px;
	color: #333333;
}
p {
	line-height: 15px;
	margin-top: 5px;
}
a {
	font-family: "LiBianJian", "Arial", "Helvetica", "sans-serif", "宋体";
	font-weight: bold;
	text-decoration: none;
	color: #000000;
}
-->
</style>

<!--背景音乐JS-->
<script language="javascript" type="text/javascript">
	document.onclick = function(event){
		event = (event || window.event);
		var audio = document.getElementById('p-music');
		audio.play();
		audio.muted = false;
	}

</script>

</head>

<body>
<table width="574" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan="2"><img src="../images/main_top.gif" width="574" height="17"></td>
  </tr>
  <tr> 
    <td width="62" valign="top"><img src="../images/main_left.gif" width="62" height="309"></td>
    <td width="512" valign="top" background="../images/main_mid.gif"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td colspan="2"><p>[<a href="../">返回首页</a>]</p></td>
        </tr>
        <tr> 
          <td height="20">&nbsp;</td>
          <td height="20">
            <br />


          
            <center>
			<h1>边缘笔记屋留言本</h1>
			<a href='index.php'>添加留言</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='show.php'>查看留言</a>
			<hr/>
			<form action='doAdd.php' method='post'>
				<table  width='200' cellpadding='10' >
					<tr>
						<td align='right'>标题</td>
						<td><input type='text' name='title' size='30' /></td>
					</tr>
					<tr>
						<td align='right'>作者</td>
						<td><input type='text' name='author' /></td>
					</tr>
					<tr>
						<td align='right'>内容</td>
						<td><textarea name='content' cols='50' rows='6'></textarea></td>
					</tr>
					<tr align='center'>
						<td colspan='2'>
							<input type='submit' value='添加留言' />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type='reset' value='清空留言' />
						</td>
					</tr>
				</table>
			</form>
		</center>

            
            </td>
        </tr>
        <tr> 
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
        <tr> 
          <td height="20" colspan="2">良言一句三冬暖，恶语伤人六月寒，如有不良发言，本站将保留证据，如有必要将上交至相关部门查处。</td>
        </tr>
        <tr> 
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
      </table> </td>
  </tr>
  <tr> 
    <td colspan="2"><img src="../images/main_buttom.gif" width="574" height="17"></td>
  </tr>
</table>
</html>
