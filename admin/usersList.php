<?php require_once("../sql/admin/sql_adminCheckLog.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminPanel - Users (tous les utilisateurs)</title>
	<?php require_once("../portion/adminHead.php"); ?>
</head>
<body>
	<?php require_once("../sql/sql_connectDtb.php"); ?>
	<?php require_once("../portion/adminHeaderNav.php"); ?>

	<section>
		<h2>Tous les utilisateurs</h2>
		
		<?php require_once("../sql/admin/sql_adminUsersList.php"); ?>
	</section>

</body>
</html>