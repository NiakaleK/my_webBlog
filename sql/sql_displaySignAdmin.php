<?php
if (!isset($_SESSION['login']) || $_SESSION['login'] == "") {
	$_SESSION['login'] = "";

	echo '<p id="footer-admin"><a href="loginAdmin.php">Connexion (administrateur)</a></p>';
}
else {
	// recuperer id_type du login
	$query_checkType = $dtb->query('SELECT id_type FROM account WHERE login="' . $_SESSION['login'] . '"');
	$dataCheckType = $query_checkType->fetch();

	//verif si admin/blogger
	echo ($dataCheckType['id_type'] == 1) ? '<p id="footer-admin"><a href="admin/adminPanel.php">AdminPANEL</a></p>' : '<p id="footer-admin"><a href="loginAdmin.php">Connexion (administrateur)</a></p>';

	$query_checkType->closeCursor();
}
?>