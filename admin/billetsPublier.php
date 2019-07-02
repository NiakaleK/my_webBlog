<?php require_once("../sql/admin/sql_adminCheckLog.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminPanel - Billets (publier)</title>
	<?php require_once("../portion/adminHead.php"); ?>
</head>
<body>
	<?php require_once("../sql/sql_connectDtb.php"); ?>
	<?php require_once("../portion/adminHeaderNav.php"); ?>

	<section>
		<h2>Publier un billet</h2>

		<form class="billet" action="billetsPublier.php" method="POST">
       		<?php require_once("../sql/sql_displayAdminBilletsForm.php"); ?>
		</form>

		<?php require_once("../sql/admin/sql_adminNewBillet.php"); ?>
	</section>

</body>
</html>