<?php 
	function admin($login, $passwd)
	{
		if (($login) && ($passwd))
		{
			$tab = file_get_contents("../private/admin");
			$tab = unserialize($tab);
			$i = 0;
				if ($tab['login'] == $login && $tab['passwd'] == hash('whirlpool', $passwd))
				{
					return TRUE;
				}
				$i++;
		}
		return FALSE;
	}
?>