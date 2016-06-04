// <?php
//	define("DB_SERVER", "localhost");
//	define("DB_USER", "root");
//	define("DB_PASS", "");
//	define("DB_NAME", "Notes");
//	?>
<?php
mysql_connect("localhost", "root", "")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("usertbl")//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
?>

