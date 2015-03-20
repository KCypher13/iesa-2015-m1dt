<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>

	<?php
		if($_GET['prenom']&&$_GET['nom']){
			echo 'Bonjour '.$_GET['prenom'].' '.$_GET['nom'];
		}
	?>

	<form action="post.php" method="post">
		<label for="nom">Nom</label><input type="text" name="nom" id="nom" required><br/>
		<label for="prenom">Prenom</label> <input type="text" name="prenom" id="prenom" required><br/>
		<input type="submit" name="submit">
	</form>


</body>
</html>