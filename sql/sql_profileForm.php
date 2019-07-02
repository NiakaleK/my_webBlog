<?php
	echo '<label>Nom</label>
		<input type="text" name="nom" placeholder="' . $dataGet['nom'] . '"/>
		<br>
		<label>Prenom</label>
		<input type="text" name="prenom" placeholder="' . $dataGet['prenom'] . '"/>
		<br>
		<label>Date de naissance</label>
		<input type="text" name="ddn" placeholder="';
		echo ($dataGet['date_naissance'] == "") ? "AAAA-MM-DD" : $dataGet['date_naissance'];

		echo '"/>
		<br>
		<label>Adresse</label>
		<input type="text" name="adresse" placeholder="' . $dataGet['adresse'] . '"/>
		<br>
		<label>Code postal</label>
		<input type="text" name="cp" placeholder="' . $dataGet['cp'] . '"/>
		<br>
		<label>Ville</label>
		<input type="text" name="ville" placeholder="' . $dataGet['ville'] . '"/>
		<br>
		<label>Login</label>
		<input type="text" name="login" placeholder="' . $dataGet['login'] . '"/>
		<br>
		<label>Nouveau mot de passe</label>
		<input type="password" name="newpwd"/>
		<br>
		<label>Confirmation du mot de passe</label>
		<input type="password" name="newpwd2"/>
		<div>
		    <button type="submit" name="profil" class="btn btn-primary">Modifier</button>
		</div>';	        	
?>