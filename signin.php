<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Inscription</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
	<?php require_once("sql/sql_connectDtb.php"); ?>
	<?php require_once("portion/header.php"); ?>

	<section>
		<div id="sign">
			<h2><a href="signin.php">INSCRIPTION</a></h2>
			<br><hr><br>
			<form action="signin.php" method="post" class="form-signin">
				<label>Nom</label>
				<input type="text" name="nom"/>
				<br>
				<label>Prenom</label>
				<input type="text" name="prenom"/>
				<br>
				<label>Login</label>
				<input type="text" name="email"/>
				<br>
				<label>Nouveau mot de passe</label>	
				<input type="password" name="pwd"/>
				<br>
				<label>Confirmation du nouveau mot de passe</label>
				<input type="password" name="pwd2"/>
				<br><br>
				<button type="submit">Valider</button>
			</form>
			<br><br><br>
			<?php require_once("sql/sql_signin.php"); ?>
		</div>
	</section>

	<?php require_once("portion/footer.php"); ?>
</body>
</html>