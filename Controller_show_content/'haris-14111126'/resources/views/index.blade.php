
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi CRUD</title>
<style>
div.container {
	width:100px;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:#663300;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
artitle {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>

</head>
<body>
<div class="Container">
<header>
	<h1>Operasi CRUD</h1>
</header>


<article>
<table border="1" width="75%" align="center">
	<form method ="post" action="session.php">
	<table width="60&"
	align="center">
	<tr>
	<th align="center" colspan="2">LOGIN<a href="index.php">daftar</a></th>
	</tr>
	<tr>
	<td>Username</td>
	<td><input type="text" name="username" size="80"></td>
	</tr>
	<tr>
	<td>password</td>
	<td><input type="password" name="password"
	size="80"></td>
	</tr>
	<td colspan="2" align="right"><input type="submit" value="Login"/></td>
</table>
</article>
<footer>Haris Munawar - 14 111 126</footer>
</div>
</body>
</html>
