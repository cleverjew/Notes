<?php
$db=new MongoClient();
$notes=$db->notes->notes;
$log=$_SESSION['log'];
$title=$_GET['title'];
$text=$_GET['text'];
$res = $notes->find();
 echo "
<script>
window.location='notes.php?title=".$title."&text=".$text."';
</script>";
foreach ($res as $inf) {
  	if ($inf['acc']==$log && $inf['title']==$title && $inf['text']==$text){
  		$notes->remove($inf);
  		break;
  	}
  
 }
?>