<?php
//	require("constants.php");
//
//	$con = mysql_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
//	mysql_select_db(DB_NAME) or die("Cannot select DB");
//	?>
<?php
mysql_connect("localhost", "root", "")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("Notes")//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
?>
