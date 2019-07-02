<header>
	<h1>adminPANEL</h1>
	<ul id="menu">
		<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login']; ?></a></li>
		<li><a href="../home.php"><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
		<li><a href="adminLogout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
	</ul>
</header>

<nav>
	<ul>
		<li><a href="adminPanel.php">Dashboard</a></li>
		<div class="hr"></div>
		<li>Gestion des utilisateurs
			<ul class="submenu">
				<li><a href="usersList.php">Tous les utilisateurs</a></li>
				<li><a href="usersUpdate.php">Modification des données</a></li>
				<li><a href="usersRights.php">Modification des permissions</a></li>
				<li><a href="usersDelete.php">Suppression</a></li>
			</ul>
		</li>
		<div class="hr"></div>
		<li>Gestion des billets
			<ul class="submenu">
				<li><a href="billetsList.php">Tous les billets</a></li>
				<li><a href="billetsAttente.php">Billets en attente</a></li>
				<li><a href="billetsModifier.php">Modifier un billet</a></li>
				<li><a href="billetsPublier.php">Publier un billet</a></li>
			</ul>
		</li>
		<div class="hr"></div>
	</ul>
</nav>