<?php
if($_POST['submit']){

	$nom = (!empty($_POST['nom']))? $_POST['nom'] : 'error';
	$prenom = (!empty($_POST['prenom'])) ? $_POST['prenom'] : 'error';
	header('location:index.php?nom='.$nom.'&prenom='.$prenom);
}
?>
