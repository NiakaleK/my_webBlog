<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] == "") {
	$_SESSION['login'] = "";

	echo '<li><a href="signin.php"><span class="glyphicon glyphicon-user"></span> S\'inscrire</a></li>
	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>';
}
else {
	//recup le type de l'user
	$query_getType = $dtb->prepare('SELECT login, nom FROM account INNER JOIN type ON account.id_type=type.id_type WHERE login=?');
	$query_getType->execute(array($_SESSION['login']));
	$dataGet = $query_getType->fetch();

	echo '<li><a href="profil.php"><span class="glyphicon glyphicon-user"></span> ' . $_SESSION['login'] . ' (' . $dataGet['nom'] . ')</a></li>
	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>';
}
?>


