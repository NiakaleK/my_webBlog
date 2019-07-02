<?php
if (isset($_POST['getId'])) {
	$idUser = $_POST['getId'];

	//recup du login pour afficher le resultat
	$query_getLogin = $dtb->prepare('SELECT login FROM account WHERE id_user=?');
	$query_getLogin->execute(array($idUser));
	$dataGet = $query_getLogin->fetch();
	
	$query_deleteUserAcc = $dtb->prepare('DELETE FROM account WHERE id_user=?');
	$query_deleteUserAcc->execute(array($idUser));
	$query_deleteUserAcc->closeCursor();

	$query_deleteUserFiche = $dtb->prepare('DELETE FROM fiche_perso WHERE id_user=?');
	$query_deleteUserFiche->execute(array($idUser));
	$query_deleteUserFiche->closeCursor();

	echo 'Suppression de "' . $dataGet['login'] . '" réussie !';
}

?>