<?php require_once("../sql/admin/sql_adminCheckLog.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminPanel - Users (Modification des données)</title>
	<?php require_once("../portion/adminHead.php"); ?>
</head>
<body>
	<?php require_once("../sql/sql_connectDtb.php"); ?>
	<?php require_once("../portion/adminHeaderNav.php"); ?>

	<section>
		<h2>Modification des données</h2>

		<div class="navbar navbar-light bg-faded">
  			<form action="usersUpdate.php" method="post" class="form-inline">
    			<input type="text" name="user" placeholder="Un utilisateur..." class="form-control mr-sm-2">
    			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  			</form>
		</div>
		<br><br>
		<?php require_once("../sql/admin/sql_adminUsersSearch.php"); ?>
		<?php require_once("../sql/admin/sql_adminUsersUpd.php"); ?>
	</section>

</body>
</html>