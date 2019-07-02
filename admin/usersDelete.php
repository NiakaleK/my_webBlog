<?php require_once("../sql/admin/sql_adminCheckLog.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminPanel - Users (suppression)</title>
	<?php require_once("../portion/adminHead.php"); ?>
</head>
<body>
	<?php require_once("../sql/sql_connectDtb.php"); ?>
	<?php require_once("../portion/adminHeaderNav.php"); ?>
	
	<section>
		<h2>Suppression</h2>

		<div class="navbar navbar-light bg-faded">
  			<form action="usersDelete.php" method="post" class="form-inline">
    			<input type="text" name="user" placeholder="Un utilisateur..." class="form-control mr-sm-2">
    			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  			</form>
		</div>
		<br><br>
		<?php require_once("../sql/admin/sql_adminUsersDeleteSearch.php"); ?>
		<?php require_once("../sql/admin/sql_adminUsersDelete.php"); ?>
	</section>

</body>
</html>