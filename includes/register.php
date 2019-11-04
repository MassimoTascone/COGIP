<?php
session_start();
$titre="Enregistrement";
include("includes/identifiants.php");
include("includes/debut.php");
include("includes/menu.php");
echo '<p><i>Vous êtes ici</i> : <a href="./index.php">Index du forum</a> --> Enregistrement';

if ($id!=0) erreur(ERR_IS_CO);



if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
{
	echo '<h1>Inscription 1/2</h1>';
	echo '<form method="post" action="register.php" enctype="multipart/form-data">
	<fieldset><legend>Identifiants</legend>
	<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br />
	<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" /><br />
	<label for="confirm">* Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" />
	</fieldset>
	<fieldset><legend>Contacts</legend>
	<label for="email">* Votre adresse Mail :</label><input type="text" name="email" id="email" /><br />
	<label for="msn">Votre adresse MSN :</label><input type="text" name="msn" id="msn" /><br />
	<label for="website">Votre site web :</label><input type="text" name="website" id="website" />
	</fieldset>
	<fieldset><legend>Informations supplémentaires</legend>
	<label for="localisation">Localisation :</label><input type="text" name="localisation" id="localisation" />
	</fieldset>
	<fieldset><legend>Profil sur le forum</legend>
	<label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko<br />
	<label for="signature">Signature :</label><textarea cols="40" rows="4" name="signature" id="signature">La signature est limitée à 200 caractères</textarea>
	</fieldset>
	<p>Les champs précédés d un * sont obligatoires</p>
	<p><input type="submit" value="S\'inscrire" /></p></form>
	</div>
	</body>
	</html>';
	
	
}



?>