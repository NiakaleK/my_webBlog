<label>Titre du billet</label>
<input type="text" class="form-control" name="Titre"><br>
<label>Thème</label>
<select name="theme" class="form-control">
	<option value="1">Decouverte-plat</option>
	<option value="2">Decouverte-dessert</option>
	<option value="3">Decouverte-street-food</option>
	<option value="4">Recette-plat</option>
	<option value="5">Recette-dessert</option>
</select><br>
<label>Contenu</label>
<textarea class="form-control" name="contenu"></textarea><br>
<label>Liens</label>
<select name="liens_type">
	<option value="image">Image</option>
	<option value="video">Video</option>
</select>
<input type="text" class="form-control" name="liens"><br>
<label>Tags</label>
<input type="text" class="form-control" name="tags"><br>
<input type="submit" class="btn btn-primary" name="publier">
