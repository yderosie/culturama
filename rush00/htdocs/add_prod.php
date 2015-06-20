<?php
	session_start();
	if ($_SESSION['droit'] == 2)
	{
	?><html>
	<body>
		<form method="post" action="add_prod.php">
			Nom du produit <input type="text" name="login" placeholder="login" />
			<br />
			Lien image <input type="text" name="image" placeholder="password"/>
			<br />
			Description <input type="text" name="description" placeholder=""/>
			<br />
			Stock <input type="text" name="stock" placeholder=""/>
			<br />
			Prix <input type="text" name="prix" placeholder=""/>
			<input type="submit" value="OK" />
		</form>
	</body>
</html><?php
	}
?>