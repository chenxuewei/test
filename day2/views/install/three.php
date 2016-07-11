<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>UCenter 安装向导</title>
<link rel="stylesheet" href="assets/js/style.css" type="text/css" media="all">
<script type="text/javascript">
	function $(id) {
		return document.getElementById(id);
	}

	function showmessage(message) {
		$('notice').value += message + "\r\n";
	}
</script>
<meta content="Comsenz Inc." name="Copyright">
</head>
<body><div class="container">
	<div class="header">
		<h1>UCenter 安装向导</h1>
		<span>V1.6.0 简体中文 UTF8 版 20110501</span>	<div class="setup step2">
		<h2>安装数据库</h2>
		<p>正在执行数据库安装</p>
	</div>
	<div class="stepstat">
		<ul>
			<li class="">1</li>
			<li class="current">2</li>
			<li class="unactivated">3</li>
			<li class="unactivated last">4</li>
		</ul>
		<div class="stepstatbg stepstat1"></div>
	</div>
</div>
<div class="main"><form method="post" action="index.php?r=install/check">
<div class="desc"><b>填写数据库信息</b></div><table class="tb2">
<input name="step" value="2" type="hidden">

<tbody><tr><th class="tbopt">&nbsp;数据库服务器:</th>
<td><input name="dbhost" value="127.0.0.1" size="35" class="txt" type="text"></td>
<td>&nbsp;数据库服务器地址, 一般为 localhost</td>
</tr>

<tr><th class="tbopt">&nbsp;数据库名:</th>
<td><input name="db" value="yan" size="35" class="txt" type="text"></td>
<td>&nbsp;</td>
</tr>

<tr><th class="tbopt">&nbsp;数据库用户名:</th>
<td><input name="dbname" value="root" size="35" class="txt" type="text"></td>
<td>&nbsp;</td>
</tr>

<tr><th class="tbopt">&nbsp;数据库密码:</th>
<td><input name="dbpwd" value="" size="35" class="txt" type="password"></td>
<td>&nbsp;</td>
</tr>

<tr><th class="tbopt">&nbsp;数据表前缀:</th>
<td><input name="dbtem" value="we_" size="35" class="txt" type="text"></td>
<td>&nbsp;同一数据库运行多个论坛时，请修改前缀</td>
</tr>
</tbody></table><div class="desc"><b>填写管理员信息</b><br>请牢记 UCenter 创始人密码，凭该密码登陆 UCenter。</div><table class="tb2">
<tbody>
<tr>
    <th class="tbopt">&nbsp;创始人账号:</th>
    <td><input name="uname" value="" size="35" class="txt" type="text"></td>
    <td>&nbsp;</td>
</tr>
<tr>
    <th class="tbopt">&nbsp;创始人密码:</th>
    <td><input name="upwd" value="" size="35" class="txt" type="password"></td>
    <td>&nbsp;</td>
</tr>

<tr><th class="tbopt">&nbsp;重复创始人密码:</th>
<td><input name="urepwd" value="" size="35" class="txt" type="password"></td>
<td>&nbsp;</td>
</tr>

<tr><th class="tbopt">&nbsp;</th>
<td><input name="submitname" value="下一步" class="btn" type="submit">
</td>
<td>&nbsp;</td>
</tr>

</tbody></table>
</form>
		<div class="footer">©2001 - 2011 <a href="http://www.comsenz.com/">Comsenz</a> Inc.</div>
	</div>
</div>

</body></html>