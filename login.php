<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Connexion</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
	<?php require_once("sql/sql_connectDtb.php"); ?>
	<?php require_once("portion/header.php"); ?>

	<section>
		<div id="sign">
			<h2><a href="login.php">CONNEXION</a></h2>
			<br><hr><br>
			<form action="login.php" method="post" class="form-signin">
				<label>Login</label>
				<input type="text" name="email"/>
				<br>
				<label>Mot de passe</label>	
				<input type="password" name="pwd"/>
				<br><br>
				<button type="submit">Valider</button>
			</form>

			<?php require_once("sql/sql_login.php"); ?>
		</div>
	</section>

	<?php require_once("portion/footer.php"); ?>
</body>
</html>