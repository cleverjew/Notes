<?php
$db=new MongoClient();
$notes=$db->notes->notes;
$log=$_SESSION['log'];
$title=$_GET['title'];
$text=$_GET['text'];
$res = $notes->find();
foreach ($res as $inf) {
  	if ($inf['acc']==$log && $inf['title']==$title && $inf['text']==$text){
  		$notes->remove($inf);
  		break;

  	}
  
 }
 echo "
<script>
window.location='notes.php';
</script>
";
?>