<?php
	session_start();
?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Home</title>
		<h1></h1>
	</head>
	<header>
		<h1 id="titre" >CULTURAMA</h1>
		<a id="panier" href="panier.php">Panier</a>
		<?php
		if (!$_SESSION['logued_on_user'])
		{
			?><a class="right" href="login.php">Login</a>
			<a class="right" href="create.html">Creer un compte</a><?php
		}
		else
		{
			if ($_SESSION['droit'] == 2)
			{
				?><a class="right" href="add_prod.php">Ajouter un produit</a>
				<a class="right" href="modif_prod.php">Modifier un produit</a>
				<a class="right" href="del_prod.php">Supprimer un produit</a>
				<a class="right" href="gestion_user.php">Gestion des Utilisateurs</a><?php
			}
			?><a class="right" href="modif.html">Modification de compte</a>
			<a class="right" href="del.php">Delete le compte</a>
			<a class="right" href="logout.php">Deconnection</a><?php
		}
		?>

	</header>
	<body>
		<div id="categorie">
			<form method="post" action="affich.php">
		   <p>
		       Catégorie :<br />
		       <input type="checkbox" name="aventure" id="aventure" /> <label for="aventure">Aventure</label><br />
		       <input type="checkbox" name="bp" id="bp" /> <label for="bp">Bons plans</label><br />
		       <input type="checkbox" name="science" id="science" /> <label for="science">Science Fiction</label><br />
		       <input type="checkbox" name="livre" id="livre" /> <label for="livre">Livres</label>
		       <input type="checkbox" name="Film" id="film" /> <label for="film">Films</label>
		       <input type="checkbox" name="jeux" id="jeux" /> <label for="jeux">Jeux-Vidéo</label>
		   </p>
		</form>
		</div>
		<iframe name="chat" src="affich.php"  width="100%" height="1000px"></iframe>
	</body>
</html>