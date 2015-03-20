<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<?php
		if($_POST['submit']){
			echo 'Bonjour '.$_POST['prenom'].' '.$_POST['nom'].'<br/>';
			echo '<a href="bad.php">Retour au formlaire</a>';
		}
		else{
	?>

	<?php
		echo date('d-m-Y');
	?>
	<form action="bad.php" method="post">
		<label for="nom">Nom</label><input type="text" name="nom" id="nom"><br/>
		<label for="prenom">Prenom</label> <input type="text" name="prenom" id="prenom"><br/>
		<input type="submit" name="submit">
	</form>
	<?php
		}
	?>


</body>
</html>