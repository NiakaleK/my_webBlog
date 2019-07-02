<?php require_once("../sql/admin/sql_adminCheckLog.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminPanel - Dashboard</title>
	<?php require_once("../portion/adminHead.php"); ?>
</head>
<body>
	<?php require_once("../sql/sql_connectDtb.php"); ?>
	<?php require_once("../portion/adminHeaderNav.php"); ?>
	
	<section>
		<?php require_once("../sql/admin/sql_adminDashboard.php"); ?>
	</section>

</body>
</html>