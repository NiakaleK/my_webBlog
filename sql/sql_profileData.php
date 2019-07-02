<?php
if (!empty($_SESSION['login'])) {
	$query_getData = $dtb->prepare('SELECT account.id_user, login, type.nom AS "type", fiche_perso.nom AS "nom", prenom, date_naissance, adresse, cp, ville FROM account INNER JOIN fiche_perso ON account.id_user=fiche_perso.id_user INNER JOIN type ON account.id_type=type.id_type WHERE login=?');
	$query_getData->execute(array($_SESSION['login']));

	$dataGet = $query_getData->fetch();
}
?>