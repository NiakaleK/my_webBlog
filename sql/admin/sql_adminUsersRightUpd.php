<?php
if (isset($_POST['getId'])) {
	$idUser = $_POST['getId'];

	if (isset($_POST['right'])) {
		$idType = $_POST['right'];

		// modifier le type de l'user
		$query_updType = $dtb->prepare('UPDATE account SET id_type=? WHERE id_user= ?');
		$query_updType->execute(array($idType, $idUser));

		//recup login et type pour afficher le resultat
		$query_getLoginType = $dtb->prepare('SELECT login, nom FROM account INNER JOIN type ON account.id_type=type.id_type WHERE id_user=?');
		$query_getLoginType->execute(array($idUser));

		if ($query_getLoginType->rowCount() > 0) {
			while ($dataLoginType = $query_getLoginType->fetch()) {
				echo 'Modification réussie: ' . $dataLoginType['login'] . ' est maintenant ' . $dataLoginType['nom'];
			}
		}

		$query_getLoginType->closeCursor();
		$query_updType->closeCursor();
	}

}

?>