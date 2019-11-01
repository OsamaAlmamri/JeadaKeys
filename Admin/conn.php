<?php
/*
define("host","localhost");
define("user","root");
define("pass","");
define("dbname","ali");
$con = mysqli_connect(host,user,pass,dbname);
if(mysqli_connect_error())
die("not connected<br>");
mysqli_query ($con,"set NAMES 'utf8' ");
*/
?>

<?php
/*
define("host","localhost");
define("user","root");
define("pass","");
define("dbname","ali");
*/
$con = mysqli_connect("localhost","root","","ali");
if(mysqli_connect_error())
die("not connected<br>");
mysqli_query ($con,"set NAMES 'utf8' ");

?>