<? 
include("./confing.php"); 
$login = $_POST['login'];
$pass = $_POST['pass'];
$t = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
$xemail=mysql_real_escape_string($login);
$req=mysql_query("select id from user where login='".$login."' and pass='".$pass."'");
if(mysql_num_rows($req)==0) {
$strSQL = "INSERT INTO user(login,pass,date) VALUES('".$login."','".$pass."','".$t."')"; 
mysql_query($strSQL) or die(mysql_error());
}
else { 

 mysql_query("UPDATE user SET date='".$t."' WHERE login='".$login."' and pass='".$pass."'");

 }
?>
