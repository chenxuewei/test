<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微度 安装向导</title>
<link rel="stylesheet" href="assets/js/style.css" type="text/css" media="all">
<script type="text/javascript" src="assets/js/jq.js"></script>

<meta content="Comsenz Inc." name="Copyright">
</head>
<body><div class="container">
	<div class="header">
		<h1>微度 安装向导</h1>
		<span>V1.6.0 简体中文 UTF8 版 20160709</span>	<div class="setup step1">
		<h2>开始安装</h2>
		<p>环境以及文件目录权限检查</p>
	</div>
	<div class="stepstat">
		<ul>
			<li class="current">1</li>
			<li class="unactivated">2</li>
			<li class="unactivated">3</li>
			<li class="unactivated last">4</li>
		</ul>
		<div class="stepstatbg stepstat1"></div>
	</div>
</div>
<div class="main"><h2 class="title">环境检查</h2>
<table class="tb" style="margin:20px 0 20px 55px;">
<tbody><tr>
	<th>项目</th>
	<th class="padleft">微度 所需配置</th>
	<th class="padleft">微度 最佳</th>
	<th class="padleft">当前服务器</th>
</tr>
<tr>
<td>操作系统</td>
<td class="padleft">不限制</td>
<td class="padleft">类Unix</td>
<td class="w pdleft1">WINNT</td>
</tr>
<tr>
<td>PHP 版本</td>
<td class="padleft">4.0</td>
<td class="padleft">5.0</td>
<td class="w pdleft1">5.5.30</td>
</tr>
<tr>
<td>附件上传</td>
<td class="padleft">不限制</td>
<td class="padleft">2M</td>
<td class="w pdleft1">2M</td>
</tr>
<tr>
<td>GD 库</td>
<td class="padleft">1.0</td>
<td class="padleft">2.0</td>
<td class="w pdleft1">bundled (2.1.0 compatible)</td>
</tr>
<tr>
<td>磁盘空间</td>
<td class="padleft">10M</td>
<td class="padleft">不限制</td>
<td class="w pdleft1">62271M</td>
</tr>
</tbody></table>
<h2 class="title">目录、文件权限检查</h2>
<table class="tb" style="margin:20px 0 20px 55px;width:90%;">
	<tbody><tr>
	<th>目录文件</th>
	<th class="padleft">所需状态</th>
	<th class="padleft">当前状态</th>
</tr>
<tr>
<td>./data/config.inc.php</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
<tr>
<td>./data</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
<tr>
<td>./data/cache</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
<tr>
<td>./data/view</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
<tr>
<td>./data/avatar</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
<tr>
<td>./data/logs</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
<tr>
<td>./data/backup</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
<tr>
<td>./data/tmp</td><td class="w pdleft1">可写</td>
<td class="w pdleft1">可写</td>
</tr>
</tbody></table>
<h2 class="title">函数依赖性检查</h2>
<table class="tb" style="margin:20px 0 20px 55px;width:90%;">
<tbody><tr>
	<th>函数名称</th>
	<th class="padleft">检查结果</th>
	<th class="padleft">建议</th>
</tr>
<tr>
<td>mysql_connect()</td>
<td class="w pdleft1">支持</td>
<td class="padleft">无</td>
</tr><tr>
<td>gethostbyname()</td>
<td class="w pdleft1">支持</td>
<td class="padleft">无</td>
</tr><tr>
<td>file_get_contents()</td>
<td class="w pdleft1">支持</td>
<td class="padleft">无</td>
</tr><tr>
<td>xml_parser_create()</td>
<td class="w pdleft1">支持</td>
<td class="padleft">无</td>
</tr></tbody></table>
<form action="index.php" method="get">
<input name="step" value="2" type="hidden"><div class="btnbox marginbot"><input onclick="history.back();" value="上一步" type="button"><input value="下一步" type="button" class="bu">
</div>
</form>
		<div class="footer">©2001 - 2011 <a href="http://www.comsenz.com/">Comsenz</a> Inc.</div>
	</div>
</div>

</body></html>
<script type="text/javascript">
    $(".bu").click(function(){
       location.href="index.php?r=install/two";
    })
</script>
