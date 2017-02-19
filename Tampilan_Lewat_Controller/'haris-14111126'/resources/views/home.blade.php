@extends('templates.index')
@section('content')
<html>
<head>
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
<header>
	<h1>Operasi CRUD</h1>
</header>
<center><div>
	<center><form action="">
	<center><table width="60&" align="center">
	<tr valign="top">
		<td>Username</td>
		<td>:</td>
		<td><input type="text"  /></td>
	</tr>
	<tr valign="top">
		<td>Password</td>
		<td>:</td>
		<td><input type="password"  /></td>
	</tr>
	<tr valign="top">
		<td></td>
		<td></td>
		<td align="right"> <a href="awal"><input type="button" name="login" value="LOGIN" /></td>
	</tr>
</table></center>
</form></center>
</div></center>
<footer>Haris Munawar - 14 111 126</footer>
</body>
</html>
@stop