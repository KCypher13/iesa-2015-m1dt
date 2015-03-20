<?php
$error = 0;
if($_GET['prenom']&&$_GET['nom']){
	if($_GET['prenom'] == 'error'){
		$errorPrenom = true;
		$error++;
	}
	if($_GET['nom'] == 'error'){
		$errorNom = true;
		$error++;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>

	<style>
		.error{
			color:red;
			margin: 0;
		}
	</style>
</head>
<body>

	<?php
		if($error == 0)
			echo 'Bonjour '.$_GET['prenom'].' '.$_GET['nom'];
	?>

	<form action="post.php" method="post">
		<?php if($errorNom){ echo '<p class="error">Merci de renseigner le champ nom</p>'; } ?>
		<label for="nom">Nom</label><input type="text" name="nom" id="nom" required><br/>
		<?php if($errorPrenom){ echo '<p class="error">Merci de renseigner le champ prénom</p>'; } ?>
		<label for="prenom">Prénom</label> <input type="text" name="prenom" id="prenom" required><br/>
		<input type="submit" name="submit">
	</form>


</body>
</html>