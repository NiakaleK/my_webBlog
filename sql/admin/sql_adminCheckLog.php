<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] == "") {

	echo '<br><br><div class="alert alert-dismissable alert-success">
			<br><center>Vous n\'etes pas connecté en tant qu\'administrateur ! Redirection à la page d\'accueil du site.. <meta http-equiv="refresh" content="2; URL=../home.php"></center>
		</div>';
}

?>