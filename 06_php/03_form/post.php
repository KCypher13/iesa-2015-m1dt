<?php
if($_POST['submit']){
	header('location:index.php?nom='.$_POST['nom'].'&prenom='.$_POST['prenom']);
}
?>
