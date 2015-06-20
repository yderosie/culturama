<?php 
	function auth($login, $passwd)
	{
		if (($login) && ($passwd))
		{
			$tab = file_get_contents("../private/passwd");
			$tab = unserialize($tab);
			$i = 0;
			while ($tab[$i] != '')
			{
				if ($tab[$i]['login'] == $login && $tab[$i]['passwd'] == hash('whirlpool', $passwd))
				{
					return TRUE;
				}
				$i++;
			}
		}
		return FALSE;
	}
?>