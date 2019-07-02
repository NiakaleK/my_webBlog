<?php require_once("../sql/admin/sql_adminCheckLog.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminPanel - Deconnexion</title>
	<?php require_once("../portion/adminHead.php"); ?>
</head>
<body>
	<?php require_once("../sql/sql_connectDtb.php"); ?>
	<?php require_once("../portion/adminHeaderNav.php"); ?>
	

	<section>
		<h2>DECONNEXION</h2>
		<?php require_once("../sql/admin/sql_adminLogout.php") ?>
	</section>

</body>
</html>