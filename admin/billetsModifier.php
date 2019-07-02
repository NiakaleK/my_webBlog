<?php require_once("../sql/admin/sql_adminCheckLog.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminPanel - Billets (modifier)</title>
	<?php require_once("../portion/adminHead.php"); ?>
</head>
<body>
	<?php require_once("../sql/sql_connectDtb.php"); ?>
	<?php require_once("../portion/adminHeaderNav.php"); ?>
	
	<section>
		<h2>Modifier un billet</h2>

		<div class="navbar navbar-light bg-faded">
  			<form action="billetsModifier.php" method="post" class="form-inline">
    			<input type="text" name="info" placeholder="Titre ou Login.." class="form-control mr-sm-2">
    			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  			</form>
		</div>

		<?php require_once("../sql/admin/sql_adminBilletUpdSearch.php"); ?>
		<?php require_once("../sql/admin/sql_adminBilletUpdChange.php"); ?>
		<?php require_once("../sql/admin/sql_adminBilletUpdValidate.php"); ?>

	</section>

</body>
</html>