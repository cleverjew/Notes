<?php
$db=new MongoClient();
$users=$db->notes->users;
$notes=$db->notes->notes;
$log=$_SESSION['log'];
$title=$_GET['title'];
$text=$_GET['text'];
//$file=$_GET['file'];
//$date=$_GET['date'];
$note = array( "acc" => $log, "title"=> $title, "text" => $text /* "file" => $file "date" => $date */ ); 
$notes->insert($note);
echo "
<script>
window.location='notes.php';
</script>";
?>