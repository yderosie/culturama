<?php
	include('auth.php');
	session_start();
	if ($_SESSION['logued_on_user'])
	{
		if (auth($_SESSION['logued_on_user'], $_POST['passwd']))
		{
			if (!file_exists('../private'))
			{
				mkdir('../private');
			}
			if (file_exists('../private/passwd'))
			{
				$tab = file_get_contents("../private/passwd");
				$tab = unserialize($tab);
			}
			$i = 0;
			while ($tab[$i])
			{
				if ($tab[$i]['login'] == $_SESSION['logued_on_user'])
				{
					unset($tab[$i]);
					$tab = serialize($tab);
					file_put_contents('../private/passwd', $tab);
					session_destroy();
					echo "Compte delete";
					echo "<br/><a href='create.html'>Retour a l'acceuil</a>";
					return ;
				}
				$i++;
			}
			echo "OK\n";
		}
	}
	else
	{
		$_SESSION['logued_on_user'] = '';
	}
?>
<html>
	<body>
		<form method="post" action="del.php">
			Mot de passe: <input type="password" name="passwd" placeholder="password"/>
			<input type="submit" value="OK" />
		</form>
	</body>
</html>