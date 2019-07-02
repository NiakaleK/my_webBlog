<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Profil</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
	<?php require_once("sql/sql_connectDtb.php"); ?>
	<?php require_once("portion/header.php"); ?>
	
	<section>
		<h2>Modifier mon billet</h2>
		<?php require_once("sql/sql_billetUpd.php"); ?>
		<?php require_once("sql/sql_billetUpdValidate.php"); ?>
	</section>

	<?php require_once("portion/footer.php"); ?>
</body>
</html>
