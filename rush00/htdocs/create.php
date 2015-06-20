<?php
		if (($_POST['login']) && ($_POST['passwd']))
		{
			if (!file_exists('../private'))
			{
				mkdir('../private');
			}
			if (file_exists('../private/passwd'))
			{
				$fd = fopen("../private/passwd", 'r');
				flock($fd, LOCK_SH);
				$tab = file_get_contents("../private/passwd");
				$tab = unserialize($tab);
				fclose($fd);
			}
			$i = 0;
			while ($tab[$i] != '')
			{
				if ($tab[$i]['login'] == $_POST['login'])
				{
					echo "ERROR :";
					echo "Login deja utilisé\n";
					return ;
				}
				$i++;
			}
			$sous_tab = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
			$tab[$i] = $sous_tab;
			$tab = serialize($tab);
			$fd = fopen("../private/passwd", 'w');
			flock($fd, LOCK_EX);
			file_put_contents('../private/passwd', $tab);
			fclose($fd);
			
			echo "OK\n";
			header('Location: index.php');
		}
		else
		{
			header('Location: index.php');
		}
?>