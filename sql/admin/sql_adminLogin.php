<?php
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$pwd_hash = sha1($password);

	$query_loginAdmin = $dtb->prepare('SELECT login, pwd FROM account WHERE login=? AND pwd=? AND id_type=1');
	$query_loginAdmin->execute(array($email, $pwd_hash));

	if ($query_loginAdmin->rowCount() > 0) {
		while ($dataLoginAdmin = $query_loginAdmin->fetch()) {
			$loginAdmin = $dataLoginAdmin['login'];
		}

		$_SESSION['login'] = $loginAdmin;

		echo '<br><br><div class="alert alert-dismissable alert-success">
			<br><center>Vous etes bien connecté(e) ! :) Redirection à la panel Admin.. <meta http-equiv="refresh" content="3; URL=admin/adminPanel.php"></center>
		</div>';

	}
	else {
		echo "<br><br><center>Echec de connexion: email ou mot de passe incorrect ou vous ne faites pas partie de l'administration :(</center>";
	}

	$query_loginAdmin->closeCursor();
}
?>