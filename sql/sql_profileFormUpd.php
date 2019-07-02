<?php
if (isset($_POST['profil'])) {
	//recuperation des données du formulaire + remplacement
	$nom = (!empty($_POST['nom'])) ? $_POST['nom'] : $dataGet['nom'];
	$prenom = (!empty($_POST['prenom'])) ? $_POST['prenom'] : $dataGet['prenom'];
	$ddn = (!empty($_POST['ddn'])) ? $_POST['ddn'] : $dataGet['date_naissance'];
	$adresse = (!empty($_POST['adresse'])) ? $_POST['adresse'] : $dataGet['adresse'];
	$cp = (!empty($_POST['cp'])) ? $_POST['cp'] : $dataGet['cp'];
	$ville = (!empty($_POST['ville'])) ? $_POST['ville'] : $dataGet['ville'];
	$login = (!empty($_POST['login'])) ? $_POST['login'] : $dataGet['login'];

	$query_updFiche = $dtb->prepare('UPDATE fiche_perso SET nom=?, prenom=?, date_naissance=?, adresse=?, cp=?, ville=? WHERE id_user=?');
	$query_updFiche->execute(array($nom, $prenom, $ddn, $adresse, $cp, $ville, $dataGet['id_user']));
	$query_updFiche->closeCursor();

	$query_updLogin = $dtb->prepare('UPDATE account SET login=? WHERE id_user=?');
	$query_updLogin->execute(array($login, $dataGet['id_user']));
	$query_updLogin->closeCursor();
	
	//verification des pwd si y a
	if (!empty($_POST['newpwd'])) {
		$newpwd = $_POST['newpwd'];

		if (!empty($_POST['newpwd2'])) {
			$newpwd2 = $_POST['newpwd2'];

			if ($newpwd == $newpwd2) {
				$newpwd_hash = sha1($newpwd);

				$query_updPwd = $dtb->prepare('UPDATE account SET pwd=? WHERE login=?');
				$query_updPwd->execute(array($newpwd_hash, $_SESSION['login']));
				$query_updPwd->closeCursor();

				echo "Le mot de passe a bien été modifié :)";
			}
			else {
				echo "Echec: les mots de passe ne correspondent pas, veuillez recommencer si besoin~";
			}
		}
	}

	echo 'Vous aviez modifié les données de "' . $dataGet['login'] . '" ! :)';
}	
?>