<?php
if (!empty($_POST['comm'])) {
	$id_billet = $_POST['commEnvoyer'];
	$comm = $_POST['comm'];
	$id_user = "";

	// verif connexion
	if (!isset($_SESSION['login']) || $_SESSION['login'] == "") {
		$id_user = NULL;
	}
	else {
		$query_getId = $dtb->query('SELECT id_user FROM account WHERE login="' . $_SESSION['login'] . '"');
		$dataGetId = $query_getId->fetch();
		$id_user = $dataGetId['id_user'];
		$query_getId->closeCursor();
	}

	//ajout du comm
	$query_addComm = $dtb->prepare('INSERT INTO commentaires (id_billet, id_user, commentaire, posted) VALUES (?, ?, ?, NOW());');
	$query_addComm->execute(array($id_billet, $id_user, $comm));
	$query_addComm->closeCursor();
}
?>