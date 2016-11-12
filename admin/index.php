<?php
session_start();

if (!empty($_SESSION['admin']))
{
if ($_SESSION['admin'])
{
?>
<html>
<head>
<title>Административная панель</title>
<style type="text/css">
#wrap
{
width: 100%;
height: 100%;
}
.loginbox1
{
width: 300px;
padding: 4px;
border: 1px solid #6383A8;
background-color: #6383A8;
color: white;
font-weight: bold;
}
.loginbox2
{
width: 300px;
padding: 4px;
border: 1px solid #777;
color: #777;
}
.flat_button,
.button_gray button,
.button_blue button {
  padding: 6px 16px 7px 16px;
  *padding: 6px 17px 7px 17px;
  margin: 0;
  font-size: 11px;
  display: inline-block;
  *display: inline;
  zoom: 1;
  cursor: pointer;
  white-space: nowrap;
  outline: none;
  font-family: tahoma, arial, verdana, sans-serif, Lucida Sans;
  vertical-align: top;
  overflow: visible;
  line-height: 13px;
  text-decoration: none;
  background: none;
  background-color: #6383a8;
  color: #FFF;
  border: 0;
  *border: 0;
  -webkit-border-radius: 2px;
  -khtml-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px;
  -webkit-transition: background-color 100ms ease-in-out;
  -khtml-transition: background-color 100ms ease-in-out;
  -moz-transition: background-color 100ms ease-in-out;
  -ms-transition: background-color 100ms ease-in-out;
  -o-transition: background-color 100ms ease-in-out;
  transition: background-color 100ms ease-in-out;
}
</style>
<link rel="stylesheet" type="text/css" href="\css\style.css" />
</head>
<body>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Вход выполнен</td></tr>
<tr><td class="loginbox2" align="center"><a href="admin_main.php" class="flat_button">Перейти к административной панели</a></td></tr>
</table>
</td></tr></table>
</center>
</body>
</html>
<?
exit;
}
}

$_SESSION['admin'] = false;
include ('config.php');

function not_logged_in()
{
echo '<html>
<head>
<title>Административная панель</title>
<style type="text/css">
#wrap
{
width: 100%;
height: 100%;
}
#wraptd
{
padding: 20px;
}
.loginbox1
{
width: 300px;
padding: 4px;
border: 1px solid #6383A8;
background-color: #6383A8;
color: white;
font-weight: bold;
}
.loginbox2
{
width: 300px;
padding: 4px;
border: 1px solid #777;
color: #777;
}
.loginbox2 input
{
width: 200px;
margin: 3px 0;
border-color: #6383A8;
}
.flat_button,
.button_gray button,
.button_blue button {
  padding: 6px 16px 7px 16px;
  *padding: 6px 17px 7px 17px;
  margin: 0;
  font-size: 11px;
  display: inline-block;
  *display: inline;
  zoom: 1;
  cursor: pointer;
  white-space: nowrap;
  outline: none;
  font-family: tahoma, arial, verdana, sans-serif, Lucida Sans;
  vertical-align: top;
  overflow: visible;
  line-height: 13px;
  text-decoration: none;
  background: none;
  background-color: #6383a8;
  color: #FFF;
  border: 0;
  *border: 0;
  -webkit-border-radius: 2px;
  -khtml-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px;
  -webkit-transition: background-color 100ms ease-in-out;
  -khtml-transition: background-color 100ms ease-in-out;
  -moz-transition: background-color 100ms ease-in-out;
  -ms-transition: background-color 100ms ease-in-out;
  -o-transition: background-color 100ms ease-in-out;
  transition: background-color 100ms ease-in-out;
}
</style>
</head>
<body>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center" id="wraptd">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Вход в административную панель</td></tr>
<tr><td class="loginbox2" align="center">
<form action="index.php" method="post">
Логин: <br>
<input type="text" name="login" value=""><br>
Пароль:<br>
<input type="text" name="password" value=""><br>
<input class="flat_button" type="submit" value="Войти">
</form>
</td></tr>
</table>
</td></tr></table>
</center>
</body>
</html>';
exit;
}

if(!$_POST) not_logged_in();
if(!$_POST['login']) not_logged_in();
if(!$_POST['password']) not_logged_in();
if($_POST['login'] != $adminlogin) not_logged_in();
if($_POST['password'] != $adminpassw) not_logged_in();

$_SESSION['admin'] = true;
if($_POST['login'] = $adminlogin){
if($_POST['password'] = $adminpassw) {

header('Location: admin_main.php');

}
}
?>
<html>
<head>
<title>Административная панель</title>
<style type="text/css">
#wrap
{
width: 100%;
height: 100%;
}
.loginbox1
{
width: 300px;
padding: 4px;
border: 1px solid #6383A8;
background-color: #6383A8;
color: white;
font-weight: bold;
}
.loginbox2
{
width: 300px;
padding: 4px;
border: 1px solid #777;
color: #777;
}
</style>
</head>
<body>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Вход выполнен</td></tr>
<tr><td class="loginbox2" align="center"><a href="admin_main.php">Перейти к административной панели</a></td></tr>
</table>
</td></tr></table>
</center>
</body>

</html>