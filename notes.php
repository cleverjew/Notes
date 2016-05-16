<html>

<head>
    <meta charset="utf-8">
    <title>Notes</title>
</head>

<body>
    <form action="logout.php">
        <input type="submit" value="Выход">
        </form>
        <h1>Заметка</h1>
        <form action="add.php">
            <br>Заголовок</br>
            <input type="text" name="title" id="title" required>
            <br>Текст</br>
            <textarea name="text" id="text" required></textarea>
            </br>
            <input type="submit" value="Добавить заметку">
            <input type="submit" value="Прикрепить файл">
        </form>
        <?php
        $db=new MongoClient();
        $users=$db->notes->users;
        $notes=$db->notes->notes;
        $log=$_SESSION['log'];
        $res=$notes->find();
        //$date=$_GET['date'];
        $text=$_GET['text'];
        $title=$_GET['title'];

              echo '
        <script>
            document.getElementById("title").value = "'.$title.'";
            document.getElementById("text").value = "'.$text.'";
        </script>';
        foreach ($res as $inf) 
          { 
            if ($inf['acc']==$log){ 
              echo '
        <div align="center" style="font-size:24px">Заголовок:'.$inf['title'].'</div>
        <br />'; echo '
        <div align="center" style="font-size:20px">Текст:'.$inf['text'].'</div>
        <br />'; echo '
        <div align="center"><a href="edit.php?title='.$inf['title'].'&text='.$inf['text'].'">Изменить заметку</a>
        </div>'; echo '
        <div align="center"><a href="delete.php?title='.$inf['title'].'&text='.$inf['text'].'">Удалить заметку</a>
        </div>'; echo '
        <br/>'; } } ?>
</body>


</html>