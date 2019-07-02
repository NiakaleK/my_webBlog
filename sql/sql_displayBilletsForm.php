<?php
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
	//recup id_type de l'user
	$query_getType = $dtb->prepare('SELECT login, id_type FROM account WHERE login=?');
	$query_getType->execute(array($_SESSION['login']));
	$dataGet = $query_getType->fetch();

	if ($dataGet['id_type'] == 1 || $dataGet['id_type'] == 2) {
	    require_once("portion/billetsForm.php");
	}
	else {
		echo '<br><br><br>Merci de bien vouloir consulter les chartes pour connaître vos droits~';
	}
}
else {
	echo '<br><br><br>Merci de bien vouloir consulter les chartes afin de connaître vos droits~';
}
?>
