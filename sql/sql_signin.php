<?php
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['pwd2'])) {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$id_type = 3;
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$pwd2 = $_POST['pwd2'];

	if ($pwd !== $pwd2) {
		echo 'Les mots de passe ne correspondent pas, veuillez recommencer~';
	}
	else {
		//verif si email deja existant
		$query_checkEmail = $dtb->prepare('SELECT login FROM account WHERE login=?');
		$query_checkEmail->execute(array($email));

		if ($query_checkEmail->rowCount() > 0) {
			echo 'Le login existe déjà, veuillez choisir un autre~';
		}
		else {
			$pwd_hash = sha1($pwd);

			$query_newBlogger = $dtb->prepare('INSERT INTO fiche_perso (nom, prenom, date_inscription) VALUES (?, ?, CURRENT_DATE())');
			$query_newBlogger->execute(array($nom, $prenom));
			$query_newBlogger->closeCursor();

			$query_newBlogger = $dtb->prepare('INSERT INTO account (id_type, login, pwd) VALUES (?, ?, ?)');
			$query_newBlogger->execute(array($id_type, $email, $pwd_hash));
			$query_newBlogger->closeCursor();

			echo '<br><br><div class="alert alert-dismissable alert-success">
				<p>Vous etes bien inscrit(e) ! Redirection à la page de connexion.. <meta http-equiv="refresh" content="3; URL=login.php"></p>
			</div>';
		}

		$query_checkEmail->closeCursor();
	}
}
else {
	echo 'Veuillez remplir tous les champs~';
}
?>