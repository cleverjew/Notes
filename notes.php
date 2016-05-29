<!DOCTYPE html>
  <html lang="en">
  <head>
<meta charset="utf-8">
<div id="welcome">
 <h2>Добро пожаловать, <span> USER </span></h2>!
	<p><a href="logout.php">Выйти</a> из системы</p>
</div>
</head>
<body>
<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:index.php");
else:
?>
	
<?php include("includes/header.php"); ?>
<div id="welcome">
<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
  <p><a href="logout.php">Выйти</a> из системы</p>
</div>
	
<?php endif; ?>
</body>
</html>
