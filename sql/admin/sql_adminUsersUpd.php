<?php
if (isset($_POST['getId'])) {
	$idUser = $_POST['getId'];

	//recuperation des données de l'user
	$query_getDataUser = $dtb->prepare('SELECT login, nom, prenom, date_naissance, adresse, cp, ville FROM account INNER JOIN fiche_perso ON account.id_user=fiche_perso.id_user WHERE account.id_user=?');
	$query_getDataUser->execute(array($idUser));
	$dataUser = $query_getDataUser->fetch();

	//recuperation des données du formulaire + remplacement
	$nom = (!empty($_POST['nom'])) ? $_POST['nom'] : $dataUser['nom'];
	$prenom = (!empty($_POST['prenom'])) ? $_POST['prenom'] : $dataUser['prenom'];
	$ddn = (!empty($_POST['ddn'])) ? $_POST['ddn'] : $dataUser['date_naissance'];
	$adresse = (!empty($_POST['adresse'])) ? $_POST['adresse'] : $dataUser['adresse'];
	$cp = (!empty($_POST['cp'])) ? $_POST['cp'] : $dataUser['cp'];
	$ville = (!empty($_POST['ville'])) ? $_POST['ville'] : $dataUser['ville'];

	$query_updFiche = $dtb->prepare('UPDATE fiche_perso SET nom=?, prenom=?, date_naissance=?, adresse=?, cp=?, ville=? WHERE id_user=?');
	$query_updFiche->execute(array($nom, $prenom, $ddn, $adresse, $cp, $ville, $idUser));
	$query_updFiche->closeCursor();

	echo 'Vous aviez modifié les données de "' . $dataUser['login'] . '" ! :)';
	$query_getDataUser->closeCursor();
}
?>