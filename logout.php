<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Deconnexion</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
	<?php require_once("sql/sql_connectDtb.php"); ?>
	<?php require_once("portion/header.php"); ?>

	<section>
		<div id="sign">
			<h2>Deconnexion</h2>
			<br>
			<?php require_once("sql/sql_logout.php"); ?>
		</div>
	</section>

	<?php require_once("portion/footer.php"); ?>
</body>
</html>