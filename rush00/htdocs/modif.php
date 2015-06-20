<?php
	if (($_POST['login']) && ($_POST['oldpw']) && ($_POST['newpw']))
	{
		$tab = file_get_contents("../private/passwd");
		$tab = unserialize($tab);
		$i = 0;
		while ($tab[$i] != '')
		{
			if ($tab[$i]['login'] == $_POST['login'] && $tab[$i]['passwd'] == hash('whirlpool', $_POST['oldpw']))
			{
				$sous_tab = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['newpw']));
				$tab[$i] = $sous_tab;
				$tab = serialize($tab);
				file_put_contents('../private/passwd', $tab, 0);
				echo "Modification effectuer\n";
				echo "<br /><a href='index.php'>Retour a l'accueil</a>";
				return;
			}
			$i++;
		}
		echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>