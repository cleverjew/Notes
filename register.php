<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php");?>
<?php
session_start();
	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."'");
 $numrows=mysql_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO usertbl
  (username, password)
	VALUES('$username', '$password')";
  $result=mysql_query($sql);
 if($result){
	$message = "Профиль успешно создан!";
} else {
 $message = "Неудалось ввести указанную информацию!";
  }
	} else {
	$message = "Имя пользователя занято!";
   }
	} else {
	$message = "Все поля обязательны для заполнения!";
	}
	}
?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>

<div class="container mregister">
<div id="login">
 <h1>Регистрация</h1>
 <form action="register.php" id="registerform" method="post"name="registerform">
<p><label for="user_pass">Имя пользователя<br>
<input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="32" type="password" value=""></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	  <p class="regtext">Уже зарегистрированы? <a href= "index.php">Введите имя пользователя</a>!</p>
 </form>
</div>
</div>
</body>
</html>