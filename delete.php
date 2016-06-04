<?php include("includes/header.php");?>
<?php 
session_start();
require 'includes/connection.php';

    $id = $_POST['delnote'];
	mysql_query("DELETE FROM notes WHERE id='$id'");
	header('location: notes.php');
	?>
</body>
</html>