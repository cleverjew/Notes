<?php include("includes/header.php");?>
<form method="POST" action="notes.php" class="contact">
<?php
session_start();
require 'includes/connection.php';
    $id = $_POST['ednote'];
    $_SESSION['id'] = $id;
    $query = mysql_query("SELECT * FROM notes WHERE id='$id'");
    $row = mysql_fetch_array($query);
    $title = $row['title'];
    $text = $row['text'];
        echo "<fieldset>
      <p>
        <input type='text' name='edtitle' cols='20' value='$title' autofocus>
      </p>

      <p class='contact-input'>
        <textarea name='edtext' cols='60' >$text</textarea>
      </p>

      <p>
        <input type='submit' class='btn btn-warning' value='Сохранить'>
      </p>
    </fieldset>
  </form>";
?>
</form>
</<body>