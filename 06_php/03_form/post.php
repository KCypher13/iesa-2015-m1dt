<?php
if(!$_POST['submit']){
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
	echo 'Bonjour '.$_POST['prenom'].' '.$_POST['nom'];
?>
<br/><a href="index.php">Retour au formlaire</a>
	
</body>
</html>