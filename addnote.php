<?php
session_start();
require 'includes/connection.php';
$title = $_REQUEST['title'];
$text = $_REQUEST['text'];
$usern = $_SESSION['session_username'];
$insert_sql = "INSERT INTO notes (title, text, usern)" .
"VALUES('{$title}', '{$text}','{$usern}')";
mysql_query($insert_sql);
header( 'Location: notes.php', true, 303 );
?>