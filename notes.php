<!DOCTYPE html>
  <html lang="en">
  <head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
  .formss {
    display: inline-block;
}
  section {
    background-color:#F0AD4E;
    border-width: 5px;
    border-color:black;
  }

</style>
</head>
<body>
<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:index.php");
else:
?>
<?php include("includes/header.php"); ?>
<form  action='logout.php' method="POST">
<button class='btn btn-danger'>Выйти</button>
</form>
<div id="welcome">
<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
<form action="addnote.php" method="POST">

    <fieldset>
      <p>
        <input type="text" class="form-control" name="title" placeholder="Название заметки" autofocus>
      </p>

      <p>
        <textarea name="text" class="form-control" placeholder="Текст"></textarea>
      </p>

      <p>
        <input type="submit" class="btn btn-warning1" value="Добавить">
      </p>
    </fieldset>
  </form>

<?php 
require 'includes/connection.php';
       $edt = $_POST['edtitle'];
      
       $edc =  $_POST['edtext'];
       
       $eid = $_SESSION['id'];
       
       if (!is_null($edt) && strlen($edt) > 0) {
        mysql_query("UPDATE notes SET title='$edt' WHERE id='$eid'");
       }
       if (!is_null($edc) && strlen($edc) > 0) {
        mysql_query("UPDATE notes SET text='$edc' WHERE id='$eid'");
       } 
       $username = $_SESSION['session_username'];     
       $result = mysql_query("SELECT * FROM notes WHERE usern='$username'");
       while ($row = mysql_fetch_array($result)) {
         
         $title = "<h1>".$row['title']."</h1>";
         $text = "<p>".$row['text']."</p>"."<br/>";
         $id = $row['id'];
         echo "
         </br>
<section>
    <figure>
      <blockquote>
        $title
        $text
      </blockquote>
    </figure>
  </section>
            <div class='container'>
              <div class='row'>
                <div>
                <form method='post' action='edit.php' class='formss'>
                    <input hidden name='ednote' value='$id'></input>
                    <button class='btn btn-warning'>Редактировать</button>
                    </form>
                  <form method='post' action='delete.php' class='formss'>
                    <input hidden name='delnote' value='$id'></input>
                    <input type='submit' class='btn btn-warning'  name='sub' value='Удалить' id='$id'>
                          </form>          
              </div>
            </div>
          </div>";           
      }
?>
  
</div>
<?php endif; ?>
</body>
</html>
