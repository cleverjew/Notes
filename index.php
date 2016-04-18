<html>
<head>
    <meta charset="utf-8">
    <title>Notes</title>
</head>
<body>
    <div class="form">
        <form class="form-signin" action="">
            <h1>Вход:</h1>
            <input placeholder="Логин" name="log" required>
            <input type="password" placeholder="Пароль" name="pass">
            <button type="submit" name="type" value="Вход">Вход</button>
            <button type="submit" name="type" value="Регистрация">Регистрация</button>
        </form>
    </div>
		
        <?php

    if ($_SESSION['log']!=null){
        echo "<script>
window.location='notes.php';
</script>";
    }
    else
    {
$log=$_GET['log'];
$pass=$_GET['pass'];
$type=$_GET['type'];
$db=new MongoClient();
$users=$db->notes->users;
$user = array( "username" => $log, "password" => $pass); 
$content=$users->findOne($user);
if ($content==null and $type=="Вход"){
    echo '<script>
    alert("Неправильный логин или пароль");
    window.location="index.php";
    </script>';
    return false;
    }
if ($content==null and $type=="Регистрация"){
    $users->insert($user);
    echo '<script>
    alert("Регистрация завершена");
    </script>';
    return false;
    }
if ($content!=null and $type=="Регистрация"){
    echo '<script>
    alert("Имя пользователя занято");
    </script>';
    return false;
    }
if ($content!=null and $type=="Вход"){
    echo '<script>
    alert("Вы успешно зашли");
    </script>'; 
        $_SESSION["log"] = $content["username"];
    return true;
}
}
?>
</body>
</html>