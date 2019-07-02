<?php
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$pwd_hash = sha1($pwd);

	$query_login = $dtb->prepare('SELECT id_type, login, pwd FROM account WHERE login=? AND pwd=? AND id_type IN (1, 2, 3)');
	$query_login->execute(array($email, $pwd_hash));

	if ($query_login->rowCount() > 0) {
		while ($dataLogin = $query_login->fetch()) {
			$idtype = $dataLogin['id_type'];
			$login = $dataLogin['login'];
		}
		
		$_SESSION['login'] = $login;

		echo '<div class="alert alert-dismissable alert-success">
			<p>Vous etes bien connecté(e) ! Redirection à la page d\'accueil..</p>
		</div>';

	}
	else {
		echo "<br><br><center>Echec de connexion: email/mot de passe incorrect ou vous n'etes pas encore inscrit(e) :(<center>";
	}

	$query_login->closeCursor();
}
?>